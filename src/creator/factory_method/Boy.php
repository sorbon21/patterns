<?php

namespace app\creator\factory_method;

class Boy implements People
{

    public function drink(): string
    {
        return "drink coffee";
    }
}
