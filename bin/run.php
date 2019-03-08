<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

$ip = '127.0.0.1';
$port = 8080;
$db = require dirname(__DIR__) . '/db.php';

(require __DIR__ . '/http_server.php')($ip, $port, $db);
