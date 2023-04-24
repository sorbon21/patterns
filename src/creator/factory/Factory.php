<?php

namespace app\creator\factory;


class Factory
{
    private  $name;

    public function __construct( $name="")
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name = ""): void
    {
        $this->name = $name;
    }
}
