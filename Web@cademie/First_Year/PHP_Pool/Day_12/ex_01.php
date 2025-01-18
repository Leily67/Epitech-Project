<?php

function printArray(array $tableau): void
{
    foreach ($tableau as $key => $value) {
        echo "[{$key}] => [{$value}]\n";
    }
}
