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


$paladin = new Paladin("Jean-Luc");
$paladin->moveRight();
$paladin->moveLeft();
$paladin->moveUp();
$paladin->moveDown();
