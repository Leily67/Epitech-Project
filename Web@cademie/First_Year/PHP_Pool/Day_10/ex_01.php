<?php

abstract class Warrior
{
    public function attack(): void
    {
        echo "I'll kill you, poor noob !\n";
    }

    abstract public function represent(): void;

    abstract public function shout(): void;
}

class Booba extends Warrior
{
    public function represent(): void
    {
        echo "92\n";
    }

    public function shout(): void
    {
        echo "Bah bien Morray !\n";
    }
}

class LaFouine extends Warrior
{
    public function represent(): void
    {
        echo "78\n";
    }

    public function shout(): void
    {
        echo "Je suis proprietaire !\n";
    }
}
