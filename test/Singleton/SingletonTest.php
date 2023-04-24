<?php

namespace appTest;

use app\creator\Singleton;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{
    public function testGetInstance()
    {
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();
        $this->assertSame($s1, $s2);
    }

}