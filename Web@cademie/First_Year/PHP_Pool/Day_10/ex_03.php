<?php

trait Singer
{
    public function sing_a_song(): void
    {
        $song = "Trololololololol";
        echo $song . "\n";
        $song = str_replace('o', 'a', $song);
        echo $song . "\n";
        $song = str_replace('a', 'i', $song);
        echo $song . "\n";
    }
}

class Booba extends Warrior implements GoodManners
{
    use Singer;

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

class LaFouine extends Warrior
{
    use Singer;

    public function represent(): void
    {
        echo "78\n";
    }

    public function shout(): void
    {
        echo "Je suis proprietaire !\n";
    }
}
