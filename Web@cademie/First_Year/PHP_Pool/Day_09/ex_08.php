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
}

class Paladin extends Character
{
    protected $endurance = 100;
    protected $agility = 8;
    protected $strength = 10;
    protected $mana = 3;

    const CLASSE = "Paladin";

    public function __construct($name)
    {
        parent::__construct($name);
        echo $this->name . ": I'll engrave my name in the history !\n";
    }

    public function moveRight(): void
    {
        echo "{$this->name}: moves right like a bad boy.\n";
    }

    public function moveLeft(): void
    {
        echo "{$this->name}: moves left like a bad boy.\n";
    }

    public function moveUp(): void
    {
        echo "{$this->name}: moves up like a bad boy.\n";
    }

    public function moveDown(): void
    {
        echo "{$this->name}: moves down like a bad boy.\n";
    }

    public function __destruct()
    {
        echo $this->name . ": Aarrg I can't believe I'm dead...\n";
    }
}

class Mage extends Character
{
    protected $endurance = 70;
    protected $agility = 10;
    protected $strength = 3;
    protected $mana = 10;

    const CLASSE = "Mage";

    public function __construct($name)
    {
        parent::__construct($name);
        echo $this->name . ": May the gods be with me.\n";
    }

    public function moveRight(): void
    {
        echo "{$this->name}: moves right with grace.\n";
    }

    public function moveLeft(): void
    {
        echo "{$this->name}: moves left with grace.\n";
    }

    public function moveUp(): void
    {
        echo "{$this->name}: moves up with grace.\n";
    }

    public function moveDown(): void
    {
        echo "{$this->name}: moves down with grace.\n";
    }

    public function __destruct()
    {
        echo $this->name . ": By the four gods, I passed away...\n";
    }
}

$paladin = new Paladin("Jean-Luc");
$paladin->moveRight();
$paladin->moveLeft();
$paladin->moveDown();
$paladin->moveUp();

$mage = new Mage("Robert");
$mage->moveRight();
$mage->moveLeft();
$mage->moveDown();
$mage->moveUp();
