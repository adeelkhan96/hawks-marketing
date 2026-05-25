<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    private function connect()
    {
        if (!function_exists('imap_open')) {
            throw new \RuntimeException('PHP IMAP extension is not enabled on this server. Please enable it in cPanel → Select PHP Version.');
        }

        $host    = config('services.imap.host');
        $port    = config('services.imap.port');
        $user    = config('services.imap.username');
        $pass    = config('services.imap.password');
        $mailbox = '{' . $host . ':' . $port . '/imap/ssl/novalidate-cert}INBOX';

        $conn = @imap_open($mailbox, $user, $pass, 0, 1);

        if (!$conn) {
            throw new \RuntimeException(imap_last_error() ?: 'Could not connect to mail server.');
        }

        return $conn;
    }

    public function inbox()
    {
        try {
            $conn  = $this->connect();
            $total = imap_num_msg($conn);
            $start = max(1, $total - 49);

            $messages = [];
            for ($i = $total; $i >= $start; $i--) {
                $ov = imap_fetch_overview($conn, (string)$i);
                if (empty($ov)) continue;
                $ov = $ov[0];
                $messages[] = [
                    'num'     => $i,
                    'uid'     => imap_uid($conn, $i),
                    'from'    => isset($ov->from)    ? imap_utf8($ov->from)    : 'Unknown',
                    'subject' => isset($ov->subject) ? imap_utf8($ov->subject) : '(no subject)',
                    'date'    => isset($ov->date)    ? date('d M Y, H:i', strtotime($ov->date)) : '',
                    'seen'    => (bool)($ov->seen ?? 0),
                ];
            }

            imap_close($conn);
            return view('admin.email.index', ['messages' => $messages, 'error' => null, 'total' => $total]);
        } catch (\Exception $e) {
            return view('admin.email.index', ['messages' => [], 'error' => $e->getMessage(), 'total' => 0]);
        }
    }

    public function show(int $uid)
    {
        try {
            $conn = $this->connect();
            $num  = imap_msgno($conn, $uid);

            if (!$num) {
                imap_close($conn);
                return redirect()->route('admin.email.inbox')->with('error', 'Email not found.');
            }

            $ov   = imap_fetch_overview($conn, (string)$num)[0];
            $body = $this->getBody($conn, $num);

            imap_setflag_full($conn, (string)$uid, '\\Seen', ST_UID);
            imap_close($conn);

            $message = [
                'uid'        => $uid,
                'from'       => isset($ov->from)    ? imap_utf8($ov->from)    : 'Unknown',
                'from_email' => $this->extractEmail($ov->from ?? ''),
                'subject'    => isset($ov->subject) ? imap_utf8($ov->subject) : '(no subject)',
                'date'       => isset($ov->date)    ? date('d M Y, H:i', strtotime($ov->date)) : '',
                'body'       => $body,
            ];

            return view('admin.email.show', compact('message'));
        } catch (\Exception $e) {
            return redirect()->route('admin.email.inbox')->with('error', $e->getMessage());
        }
    }

    public function compose(Request $request)
    {
        return view('admin.email.compose', [
            'to'      => $request->query('to', ''),
            'subject' => $request->query('subject', ''),
            'quote'   => $request->query('quote', ''),
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'to'      => 'required|email',
            'subject' => 'required|string|max:200',
            'body'    => 'required|string',
        ]);

        Mail::html($request->body, fn($m) => $m->to($request->to)->subject($request->subject));

        return redirect()->route('admin.email.inbox')
            ->with('message', 'Email sent to ' . $request->to . ' successfully.');
    }

    // ── Private helpers ──────────────────────────────────────────────────────

    private function getBody($conn, int $num): string
    {
        $structure = imap_fetchstructure($conn, $num);

        if (!isset($structure->parts)) {
            $raw     = imap_body($conn, $num);
            $decoded = $this->decodeBody($raw, $structure->encoding ?? 0);
            return strtolower($structure->subtype ?? 'plain') === 'html'
                ? $decoded
                : '<pre style="white-space:pre-wrap;font-family:inherit;margin:0">' . e($decoded) . '</pre>';
        }

        return $this->extractFromParts($conn, $num, $structure->parts, '')
            ?: '<em class="text-muted">No readable content found.</em>';
    }

    private function extractFromParts($conn, int $num, array $parts, string $prefix): string
    {
        $html = '';
        $text = '';

        foreach ($parts as $i => $part) {
            $section = ($prefix !== '' ? $prefix . '.' : '') . ($i + 1);
            $subtype = strtolower($part->subtype ?? '');

            if ($subtype === 'html' && !$html) {
                $html = $this->decodeBody(imap_fetchbody($conn, $num, $section), $part->encoding ?? 0);
            } elseif ($subtype === 'plain' && !$text) {
                $raw  = $this->decodeBody(imap_fetchbody($conn, $num, $section), $part->encoding ?? 0);
                $text = '<pre style="white-space:pre-wrap;font-family:inherit;margin:0">' . e($raw) . '</pre>';
            }

            if (!empty($part->parts) && !$html) {
                $nested = $this->extractFromParts($conn, $num, $part->parts, $section);
                if ($nested) {
                    if (str_contains($nested, '<') && !$html) $html = $nested;
                    elseif (!$text) $text = $nested;
                }
            }
        }

        return $html ?: $text;
    }

    private function decodeBody(string $body, int $encoding): string
    {
        return match ($encoding) {
            3 => base64_decode(str_replace(["\r", "\n"], '', $body)),
            4 => quoted_printable_decode($body),
            default => $body,
        };
    }

    private function extractEmail(string $from): string
    {
        preg_match('/[\w._%+\-]+@[\w.\-]+\.\w{2,}/', $from, $m);
        return $m[0] ?? $from;
    }
}
