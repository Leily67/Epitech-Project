<?php

class Goblin extends Character
{
    public function __construct(string $name = '')
    {
        parent::__construct($name ?: "Goblin " . self::$counter);
    }
}
