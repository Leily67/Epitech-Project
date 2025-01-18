<?php

class Troll extends Character
{
    public function __construct(string $name = '')
    {
        parent::__construct($name ?: "Troll " . self::$counter);
    }
}
