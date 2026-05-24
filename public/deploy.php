<?php
/**
 * One-time server setup script.
 * Upload this file directly to public_html/ via File Manager.
 * Visit: yourdomain.com/deploy.php?token=hawks2024deploy
 * DELETE this file immediately after running.
 */

$token = 'hawks2024deploy';

if (!isset($_GET['token']) || $_GET['token'] !== $token) {
    http_response_code(403);
    die('Forbidden.');
}

$repo   = '/home/thehawks/repositories/hawks-marketing';
$pub    = '/home/thehawks/public_html';
$php    = '/usr/local/bin/php';

echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Deploy</title>
<style>
  body { font-family: monospace; background:#1e1e1e; color:#d4d4d4; padding:20px; }
  h2   { color:#4ec9b0; }
  h3   { color:#9cdcfe; margin-top:20px; }
  pre  { background:#252526; padding:12px; border-radius:4px; white-space:pre-wrap; word-break:break-all; }
  .ok  { color:#4ec9b0; font-weight:bold; }
  .err { color:#f44747; font-weight:bold; }
</style></head><body>
<h2>Hawks Marketing — Server Setup</h2>';

if (!function_exists('shell_exec')) {
    echo '<p class="err">shell_exec is disabled. Contact HosterPK support to enable it.</p></body></html>';
    exit;
}

if (!is_dir($repo)) {
    echo "<p class=\"err\">Repo not found at: $repo</p></body></html>";
    exit;
}

function run(string $label, string $cmd): void {
    echo "<h3>$label</h3><pre>";
    $out = shell_exec($cmd . ' 2>&1');
    echo htmlspecialchars($out ?: '(no output)');
    echo '</pre>';
}

// 1. Composer
run('Composer Install', "cd $repo && composer install --no-dev --optimize-autoloader");

// 2. Copy public files to public_html
run('Copy index.php → public_html', "/bin/cp $repo/public/index.php $pub/index.php");
run('Copy .htaccess → public_html', "/bin/cp $repo/public/.htaccess $pub/.htaccess");
run('Sync assets → public_html/assets', "/bin/cp -r $repo/public/assets/. $pub/assets/");

// 3. Artisan setup
run('Generate App Key',  "$php $repo/artisan key:generate --force");
run('Run Migrations',    "$php $repo/artisan migrate --force");
run('Config Cache',      "$php $repo/artisan config:cache");
run('Route Cache',       "$php $repo/artisan route:cache");
run('View Clear',        "$php $repo/artisan view:clear");
run('Storage Link',      "$php $repo/artisan storage:link");

echo '<h2 class="ok">✓ Setup complete!</h2>';
echo '<p class="err">⚠ DELETE this file now — go to File Manager and delete public_html/deploy.php</p>';
echo '</body></html>';
