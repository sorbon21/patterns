<?php


use app\creator\factory_method\Boy;
use app\creator\factory_method\BoyFactory;
use app\creator\factory_method\Girl;
use app\creator\factory_method\GirlFactory;
use PHPUnit\Framework\TestCase;


final class FactoryMethodTest extends TestCase
{
    public function testMake()
    {
        $boyFactory = new BoyFactory();
        $girlFactory = new GirlFactory();
        self::assertTrue($boyFactory->make() instanceof Boy);
        self::assertTrue($girlFactory->make() instanceof Girl);
        self::assertEquals($boyFactory->make()->drink(), "drink coffee");
        self::assertEquals($girlFactory->make()->drink(), "drink vodka");


    }

}