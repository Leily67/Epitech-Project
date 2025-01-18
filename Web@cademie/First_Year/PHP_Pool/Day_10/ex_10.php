<?php

class Skill
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Pangolin
{
    public array|null $friends;
    public Skill $skills;

    public function __construct(array|null $friends, Skill $skills)
    {
        $this->friends = $friends;
        $this->skills = $skills;
    }
}
