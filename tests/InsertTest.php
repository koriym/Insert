<?php

declare(strict_types=1);

namespace Koriym\Insert;

use function dirname;
use PHPUnit\Framework\TestCase;
use Swoole\Coroutine\MySQL;
use Swoole\Event;

class InsertTest extends TestCase
{
    /**
     * @var Insert
     */
    protected $insert;

    protected function setUp() : void
    {
    }

    public function testInsertInvoke() : void
    {
        go(function () : void {
            $mysql = new MySQL;
            $db = require dirname(__DIR__) . '/db.php';
            $mysql->connect($db);
            $insert = new Insert($mysql);
            ($insert)(['id', '1', '2', '3', '4', '5', '6', '7', '8', '9']);
        });
        Event::wait();
    }
}
