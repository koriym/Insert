<?php

declare(strict_types=1);

use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;

return function (
    string $ip,
    int $port,
    array $db,
    int $mode = SWOOLE_BASE,
    int $sockType = SWOOLE_SOCK_TCP,
    array $settings = []
) : void {
    $http = new Server($ip, $port, $mode, $sockType);
    $http->set($settings);
    $http->on('start', function () use ($ip, $port) : void {
        echo "Swoole http server is started at http://{$ip}:{$port}" . PHP_EOL;
    });
    $http->on('request', function (Request $request, Response $response) : void {
        if (! isset($i)) {
            $i = 0;
        }
//        file_put_contents(__DIR__ . '/data.txt', (string) $i, FILE_APPEND);
//        $rowData = json_decode($request->rawContent(), true);
//        ($inert)($rowData);
        echo $i++;
        echo PHP_EOL;
        $response->end($i);
    });
    $http->start();
};
