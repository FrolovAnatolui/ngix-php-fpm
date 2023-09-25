<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{

    public function testAddition()
    {
       $result = 1 + 2;
       $this->assertEquals(3, $result);
    }
}

