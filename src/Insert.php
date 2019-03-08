<?php

declare(strict_types=1);

namespace Koriym\Insert;

use Swoole\Coroutine\MySQL;

final class Insert
{
    /**
     * @var \Swoole\Coroutine\Mysql\Statement
     */
    private $stmt;

    public function __construct(MySQL $mySql)
    {
        $this->mysql = $mySql;
        $this->stmt = $mySql->prepare('INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    }

    public function __invoke(array $params) : void
    {
        $this->stmt->execute($params);
    }
}
