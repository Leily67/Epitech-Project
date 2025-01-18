<?php

class Pangolin extends Character
{
    public function __construct(string $name = '')
    {
        parent::__construct($name ?: "Pangolin " . self::$counter);
    }
}
