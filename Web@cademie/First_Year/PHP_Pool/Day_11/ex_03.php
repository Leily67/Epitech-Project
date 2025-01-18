<?php

namespace Imperium;

class Soldier
{
    private string $name;
    private int $hp;
    private int $attack;

    public function __construct(string $name, int $hp = 50, int $attack = 12)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->attack = $attack;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    public function doDamage(object $soldier): void
    {
        $soldier->setHp($soldier->getHp() - $this->attack);
    }

    public function __toString(): string
    {
        return "{$this->name} the Imperium Space Marine : {$this->hp} HP.";
    }
}

namespace Chaos;

class Soldier
{
    private string $name;
    private int $hp;
    private int $attack;

    public function __construct(string $name, int $hp = 70, int $attack = 12)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->attack = $attack;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    public function doDamage(object $soldier): void
    {
        $soldier->setHp($soldier->getHp() - $this->attack);
    }

    public function __toString(): string
    {
        return "{$this->name} the Chaos Space Marine : {$this->hp} HP.";
    }
}
