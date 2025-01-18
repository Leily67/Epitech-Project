<?php
function my_rounds(float $nb): void
{
    echo "Results : " . round($nb) . " - " . ceil($nb) . " - " . floor($nb) . PHP_EOL;
}
