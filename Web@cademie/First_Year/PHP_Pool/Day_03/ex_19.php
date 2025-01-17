<?php
function calc(string $operation, int $nb1, int $nb2): mixed
{
    switch ($operation) {
        case '+':
            return $nb1 + $nb2;
        case '-':
            return $nb1 - $nb2;
        case '*':
            return $nb1 * $nb2;
        case '/':
            return $nb2 != 0 ? $nb1 / $nb2 : null;
        case '%':
            return $nb2 != 0 ? $nb1 % $nb2 : null;
        default:
            return null;
    }
}
