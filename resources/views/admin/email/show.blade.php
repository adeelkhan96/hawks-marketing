@extends('layouts.admin')
@section('title', 'View Email')
@section('page-title', 'Email — View')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <a href="{{ route('admin.email.inbox') }}" class="btn btn-sm btn-outline-secondary">
        <i class="fas fa-arrow-left me-1"></i> Back to Inbox
    </a>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.email.compose', [
                'to'      => $message['from_email'],
                'subject' => 'Re: ' . $message['subject'],
            ]) }}"
           class="btn btn-sm px-3" style="background:#ff511a;color:#fff;">
            <i class="fas fa-reply me-1"></i> Reply
        </a>
        <a href="{{ route('admin.email.compose') }}"
           class="btn btn-sm btn-outline-secondary px-3">
            <i class="fas fa-pen me-1"></i> Compose New
        </a>
    </div>
</div>

{{-- Email header --}}
<div class="card border-0 shadow-sm mb-3">
    <div class="card-body">
        <h5 class="fw-semibold mb-3">{{ $message['subject'] }}</h5>
        <div class="row g-2" style="font-size:14px;">
            <div class="col-sm-8">
                <span class="text-muted">From:</span>
                <span class="ms-2">{{ $message['from'] }}</span>
            </div>
            <div class="col-sm-4 text-sm-end">
                <span class="text-muted">{{ $message['date'] }}</span>
            </div>
        </div>
    </div>
</div>

{{-- Email body --}}
@php
$emailDoc = '<!DOCTYPE html><html><head><meta charset="UTF-8">
<style>
  body { font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1.7; color: #333; padding: 24px; margin: 0; }
  a    { color: #ff511a; }
  img  { max-width: 100%; height: auto; }
  p    { margin: 0 0 12px; }
  pre  { white-space: pre-wrap; font-family: inherit; }
</style></head><body>' . $message['body'] . '</body></html>';
@endphp
<div class="card border-0 shadow-sm">
    <div class="card-body p-0" style="overflow:hidden;border-radius:inherit;">
        <iframe id="emailFrame"
                sandbox="allow-same-origin"
                srcdoc="{!! e($emailDoc) !!}"
                style="width:100%;border:none;min-height:420px;display:block;">
        </iframe>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const f = document.getElementById('emailFrame');
    f.addEventListener('load', function () {
        const h = f.contentDocument?.body?.scrollHeight;
        if (h && h > 420) f.style.minHeight = Math.min(h + 40, 900) + 'px';
    });
});
</script>

@endsection
