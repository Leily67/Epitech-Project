<?php
function multiples(int $nb): void
{
    for ($i = 0; $i <= 200000; $i += $nb) {
        echo "$i\n";
    }
}
