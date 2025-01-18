<?php
function print_age(int $age): void
{
    echo $age <= 0 ? "Enfantillage...\n" : ($age === 42 ? "the answer.\n" : "je peux aller en boite\n");
}
