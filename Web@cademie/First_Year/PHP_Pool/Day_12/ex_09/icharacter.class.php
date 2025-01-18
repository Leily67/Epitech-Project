<?php

interface ICharacter
{
    public function getName(): string;
    public function getLife(): int;
    public function attack(Character $target): void;
}
