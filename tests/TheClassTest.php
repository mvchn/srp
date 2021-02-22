<?php

use PHPUnit\Framework\TestCase;

final class TheClassTest extends TestCase
{
    public function testMakesGoodSuccess(): void
    {
        $c = new TheClass();
        $result = $c('one');
        $this->assertEquals('one makes good', $result);
    }
}

