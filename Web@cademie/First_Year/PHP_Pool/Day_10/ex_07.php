<?php

class Pony
{
    private $name;
    private $gender;
    private $color;

    public function __construct($name, $gender, $color)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            echo "Ce n'est pas bien de getter un attribut qui est privé !\n";
            return $this->$property;
        } else {
            echo "Il n'y a pas d'attribut : {$property}.\n";
            return null;
        }
    }

    public function __set($property, $value): void
    {
        if (property_exists($this, $property)) {
            echo "Ce n'est pas bien de setter un attribut qui est privé !\n";
            $this->$property = $value;
        } else {
            echo "Il n'y a pas d'attribut : {$property}.\n";
        }
    }

    public function __toString(): string
    {
        return "Don't worry, I'm a pony !\n";
    }

    public function __destruct()
    {
        echo "I'm a dead pony.\n";
    }
}
