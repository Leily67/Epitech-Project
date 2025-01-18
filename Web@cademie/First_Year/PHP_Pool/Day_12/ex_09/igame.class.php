<?php

interface IGame
{
    public function addPlayer(Character $player): void;
    public function player(int $index): Character;
}
