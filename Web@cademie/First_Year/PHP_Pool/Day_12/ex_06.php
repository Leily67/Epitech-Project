<?php

class Character
{
    private static int $counter = 0;
    private string $name;
    private int $strength;
    private int $magic;
    private int $intelligence;
    private int $life;

    public function __construct(string $name = '')
    {
        self::$counter++;
        $this->name = $name ?: "Character " . self::$counter;
        $this->strength = 0;
        $this->magic = 0;
        $this->intelligence = 0;
        $this->life = 100;
    }

    protected function getName(): string
    {
        return $this->name;
    }

    protected function getStrength(): int
    {
        return $this->strength;
    }

    protected function getMagic(): int
    {
        return $this->magic;
    }

    protected function getIntelligence(): int
    {
        return $this->intelligence;
    }

    protected function getLife(): int
    {
        return $this->life;
    }

    public function __toString(): string
    {
        return "My name is {$this->name}.\n";
    }
}
