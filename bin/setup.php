<?php

declare(strict_types=1);

$config = require dirname(__DIR__) . '/db.php';
$mysqli = mysqli_connect($config['host'], $config['user'], $config['password']);
$mysqli->query("CREATE DATABASE IF NOT EXISTS {$config['database']}");
$mysqli->query("USE {$config['database']}");
$result = $mysqli->query('CREATE TABLE IF NOT EXISTS users (
  id VARCHAR(36),
  col1 VARCHAR(100),
  col2 VARCHAR(100),
  col3 VARCHAR(100),
  col4 VARCHAR(100),
  col5 VARCHAR(100),
  col6 VARCHAR(100),
  col7 VARCHAR(100),
  col8 VARCHAR(100),
  col9 VARCHAR(100)
)');
if (! $result) {
    throw new RuntimeException;
}
