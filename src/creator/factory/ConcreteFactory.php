<?php

namespace app\creator\factory;

class ConcreteFactory
{

    public function make(): Factory
    {
        return new Factory();
    }
}
