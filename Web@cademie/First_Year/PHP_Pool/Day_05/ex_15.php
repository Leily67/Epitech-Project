<?php
function convert_number(int $nbr): void
{
    if ($nbr > 1000) {
        echo "Vive les Pangolins\n";
    } else {
        echo chr($nbr) . "\n";
    }
}
