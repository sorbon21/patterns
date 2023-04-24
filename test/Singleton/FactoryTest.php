<?php

namespace appTest;

use app\creator\factory\ConcreteFactory;
use app\creator\factory\Factory;
use PHPUnit\Framework\TestCase;


final class FactoryTest extends TestCase
{
    public function testMake()
    {
        $factory = new ConcreteFactory();
        $this->assertTrue($factory->make() instanceof Factory);
    }

}