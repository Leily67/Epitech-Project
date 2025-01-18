<?php

class Pony
{
    public $name;
    public $gender;
    public $color;

    public function __construct($name, $gender, $color)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }

    public function speak(): void
    {
        echo "Hiii hiii hiiii\n";
    }

    public function __toString(): string
    {
        return "Don't worry, I'm a pony !\n";
    }

    public function __call($name, $arguments): void
    {
        echo "I don't know what to do...\n";
    }

    public function __destruct()
    {
        echo "I'm a dead pony.\n";
    }
}
