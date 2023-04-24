<?php

namespace app\creator\factory_method;

class Girl implements People
{

    public function drink(): string
    {
        return "drink vodka";
    }
}
