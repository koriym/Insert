<?php

declare(strict_types=1);

use Swoole\Atomic;

$atomic = new Atomic(123);
echo $atomic->add(12) . "\n";
echo $atomic->sub(11) . "\n";
echo $atomic->cmpset(122, 999) . "\n";
echo $atomic->cmpset(124, 999) . "\n";
echo $atomic->get() . "\n";
