<?php

use PHPUnit\Framework\TestCase;

class MyTest2 extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(4, 2 + 2);
    }

    public function testAddition()
    {
       $result = 1 + 2;
       $this->assertEquals(3, $result);
    }

    public function testNotEquals()
    {
       $this->assertNotEquals(7, 2 + 3);
       $this->assertNotEquals(7, 4 + 3); // Falure test 1
    }
    // test test-runner
    public function testOther()
    {
        $loggedIn=True;
        $expired=False;
        $this->assertTrue($loggedIn);
        $this->assertFalse($expired);

        $value = Null;
        $user='User';
        $this->assertNull($value);
        $this->assertNull($user); // Falure test 2
        $this->assertNotNull($user);
#        $this->assertNotNull($value); // Falure test 3
    }
}

