<?php

class Scanner
{
    public static function scan(object $soldier): void
    {
        if ($soldier instanceof \Imperium\Soldier) {
            echo "Praise be, Emperor, Lord.\n";
        } else {
            echo "Xenos spotted.\n";
        }
    }
}
