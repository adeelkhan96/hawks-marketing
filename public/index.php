<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Auto-detect app root: works both locally (vendor alongside) and on server (public_html separate from repo)
$appRoot = is_dir(__DIR__ . '/../vendor')
    ? __DIR__ . '/..'
    : '/home/thehawks/repositories/hawks-marketing';

if (file_exists($maintenance = $appRoot . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

require $appRoot . '/vendor/autoload.php';

(require_once $appRoot . '/bootstrap/app.php')
    ->handleRequest(Request::capture());
