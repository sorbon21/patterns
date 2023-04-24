<?php

namespace app\creator\factory_method;
class  BoyFactory implements PeopleFactory
{

    public function make(): Boy
    {
        return new Boy();
    }
}