<?php

interface GoodManners
{
    public function say_please(): void;

    public function say_thanks(): void;

    public function say_sorry(string $name): void;

    const END_WORDS = ", dirais-je.";
}

class Booba extends Warrior implements GoodManners
{
    public function represent(): void
    {
        echo "92\n";
    }

    public function shout(): void
    {
        echo "Bah bien Morray !\n";
    }

    public function say_please(): void
    {
        echo "S'il-te-plait" . self::END_WORDS . "\n";
    }

    public function say_thanks(): void
    {
        echo "Merci" . self::END_WORDS . "\n";
    }

    public function say_sorry(string $name): void
    {
        echo "Mille excuses, $name" . self::END_WORDS . "\n";
    }
}
