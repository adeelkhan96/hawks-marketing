<?php
if (!isset($_GET['token']) || $_GET['token'] !== 'hawks2024seed') {
    http_response_code(403); die('Forbidden.');
}
$root = '/home/thehawks/repositories/hawks-marketing';
$php  = '/usr/local/bin/php';
echo '<pre>';
echo shell_exec("export HOME=/home/thehawks && $php $root/artisan db:seed --class=AdminSeeder --force 2>&1");
echo '</pre><p>Done. DELETE this file now.</p>';
