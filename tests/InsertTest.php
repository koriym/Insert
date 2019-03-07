<?php

declare(strict_types=1);

namespace Koriym\Insert;

use PHPUnit\Framework\TestCase;

class InsertTest extends TestCase
{
    /**
     * @var Insert
     */
    protected $insert;

    protected function setUp() : void
    {
        $this->insert = new Insert;
    }

    public function testIsInstanceOfInsert() : void
    {
        $actual = $this->insert;
        $this->assertInstanceOf(Insert::class, $actual);
    }
}
