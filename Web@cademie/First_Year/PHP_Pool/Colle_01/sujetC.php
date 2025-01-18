<?php

function colle($x, $y)
{
    if ($x <= 0 || $y <= 0) {
        return;
    }

    for ($i = 1; $i <= $y; $i++) {
        $line = '';

        if ($i === 1) {
            $line .= 'A';
            $line .= str_repeat('B', max(0, $x - 2));
            if ($x > 1) {
                $line .= 'A';
            }
        } elseif ($i === $y) {
            $line .= 'C';
            $line .= str_repeat('B', max(0, $x - 2));
            if ($x > 1) {
                $line .= 'C';
            }
        } else {
            $line .= 'B';
            $line .= str_repeat(' ', max(0, $x - 2));
            if ($x > 1) {
                $line .= 'B';
            }
        }

        echo $line . "\n";
    }
}
