<?php
class MyAttributes
{
    private string $a;
    private string $b;

    public function __construct(string $a, string $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA(): string
    {
        return $this->a;
    }

    public function setA(string $a): void
    {
        $this->a = $a;
    }

    public function getB(): string
    {
        return $this->b;
    }

    public function setB(string $b): void
    {
        $this->b = $b;
    }

    public function display(): void
    {
        echo $this->a . " " . $this->b . "\n";
    }
}
