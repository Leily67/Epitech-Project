<?php
class Character
{
    protected string $name;
    protected int $endurance = 50;
    protected int $agility = 2;
    protected int $strength = 2;
    protected int $mana = 2;
    public const CLASSE = "Character";

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEndurance(): int
    {
        return $this->endurance;
    }

    public function getAgility(): int
    {
        return $this->agility;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function getClasse(): string
    {
        return self::CLASSE;
    }
}
