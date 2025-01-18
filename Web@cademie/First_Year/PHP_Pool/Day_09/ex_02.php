<?php
class MyAttribute
{
    private string $attribute;

    public function __construct(string $attribute)
    {
        $this->attribute = $attribute;
    }

    public function display(): void
    {
        echo $this->attribute . "\n";
    }
}
