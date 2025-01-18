<?php

interface iCars
{
    public function getPrice(): int;
    public function getWeight(): int;
    public function mineIsBigger($obj): void;
}

class BMW implements iCars
{
    private int $_price;
    private int $_weight;

    public function __construct(int $price, int $weight = 4242)
    {
        $this->_price = $price;
        $this->_weight = $weight;
    }

    public function getPrice(): int
    {
        return $this->_price;
    }

    public function getWeight(): int
    {
        return $this->_weight;
    }

    public static function lessExpensive(): int
    {
        return 15000;
    }

    public function mineIsBigger($obj): void
    {
        if ($obj instanceof Toyota) {
            echo "Mine is bigger\n";
        } elseif ($obj instanceof Smart) {
            echo "Mine is way bigger !\n";
        } elseif ($obj instanceof Velib) {
            echo "LOL\n";
        } else {
            echo "Show me !\n";
        }
    }
}

class Suzuki implements iCars
{
    private int $_price;
    private int $_weight;

    public function __construct(int $price, int $weight = 4242)
    {
        $this->_price = $price;
        $this->_weight = $weight;
    }

    public function getPrice(): int
    {
        return $this->_price;
    }

    public function getWeight(): int
    {
        return $this->_weight;
    }

    public static function lessExpensive(): int
    {
        return 5000;
    }

    public function mineIsBigger($obj): void
    {
        if ($obj instanceof Toyota) {
            echo "Mine is bigger\n";
        } elseif ($obj instanceof Smart) {
            echo "Mine is way bigger !\n";
        } elseif ($obj instanceof Velib) {
            echo "LOL\n";
        } else {
            echo "Show me !\n";
        }
    }
}
