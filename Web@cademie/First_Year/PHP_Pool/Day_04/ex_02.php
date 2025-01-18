<?php
function print_status(int $age): void
{
    echo $age < 18 ? "Site interdit aux mineurs.\n" : "Vous pouvez entrer !\n";
}
