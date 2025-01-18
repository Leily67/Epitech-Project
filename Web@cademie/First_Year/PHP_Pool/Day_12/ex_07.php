<?php

class Game
{
    private int $length;
    private array $players;

    public function __construct()
    {
        $this->length = 0;
        $this->players = [];
        echo "New game!\n";
    }

    public function addPlayer(Character $player): void
    {
        $this->players[] = $player;
        echo "New player \"{$player->getName()}\".\n";
    }

    public function player(int $index): Character
    {
        return $this->players[$index];
    }
}
