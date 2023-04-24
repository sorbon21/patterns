<?php

namespace app\creator\factory_method;

class  GirlFactory implements PeopleFactory
{

    public function make(): Girl
    {
        return new Girl();
    }
}

