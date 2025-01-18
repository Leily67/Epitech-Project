<?php
function is_similar(mixed $a, mixed $b): void
{
    if ($a === $b) {
        echo "Same type and value.\n";
    } elseif (gettype($a) === gettype($b)) {
        echo "Same type.\n";
    } elseif ($a == $b) {
        echo "Same value.\n";
    }
}
