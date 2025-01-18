<?php

interface iMove
{
    public function moveRight(): void;
    public function moveLeft(): void;
    public function moveUp(): void;
    public function moveDown(): void;
}

class Character implements iMove
{
    protected $name;
    protected $endurance = 50;
    protected $agility = 2;
    protected $strength = 2;
    protected $mana = 2;

    const CLASSE = "Character";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function moveRight(): void
    {
        echo "{$this->name}: moves right.\n";
    }

    public function moveLeft(): void
    {
        echo "{$this->name}: moves left.\n";
    }

    public function moveUp(): void
    {
        echo "{$this->name}: moves up.\n";
    }

    public function moveDown(): void
    {
        echo "{$this->name}: moves down.\n";
    }

    final public function takeWeapon(): void
    {
        echo "{$this->name}: takes out his weapon.\n";
    }
}

class Paladin extends Character
{
    const CLASSE = "Paladin";

    public function __construct($name)
    {
        parent::__construct($name);
        echo $this->name . ": I'll engrave my name in the history !\n";
    }

    public function __destruct()
    {
        echo $this->name . ": Aarrg I can't believe I'm dead...\n";
    }
}

class Mage extends Character
{
    const CLASSE = "Mage";

    public function __construct($name)
    {
        parent::__construct($name);
        echo $this->name . ": May the gods be with me.\n";
    }

    public function __destruct()
    {
        echo $this->name . ": By the four gods, I passed away...\n";
    }
}

$mage = new Mage("Robert");
$mage->takeWeapon();
