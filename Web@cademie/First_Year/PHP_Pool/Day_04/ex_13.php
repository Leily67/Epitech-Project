<?php
function is_major(int $age): void
{
    echo $age >= 18 ? "Majeur\n" : "Mineur\n";
}
