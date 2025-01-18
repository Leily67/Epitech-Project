<?php
class MyTinyCalculator
{
    private float $a;
    private float $b;
    private float $result;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->result = 0;
    }

    public function getA(): float
    {
        return $this->a;
    }

    public function setA(float $a): void
    {
        $this->a = $a;
    }

    public function getB(): float
    {
        return $this->b;
    }

    public function setB(float $b): void
    {
        $this->b = $b;
    }

    public function getResult(): float
    {
        return $this->result;
    }

    public function setResult(float $result): void
    {
        $this->result = $result;
    }

    public function add(): float
    {
        $this->result = $this->a + $this->b;
        return $this->result;
    }

    public function subtract(): float
    {
        $this->result = $this->a - $this->b;
        return $this->result;
    }

    public function multiply(): float
    {
        $this->result = $this->a * $this->b;
        return $this->result;
    }

    public function divide(): float
    {
        if ($this->b == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        $this->result = $this->a / $this->b;
        return $this->result;
    }
}
