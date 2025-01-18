<?php
function playWithMe(int $lines): bool
{
    if ($lines <= 0) {
        return false;
    }

    $sequence = ['1'];

    for ($i = 1; $i < $lines; $i++) {
        $current = $sequence[$i - 1];
        $next = '';
        $count = 1;

        for ($j = 1, $length = strlen($current); $j < $length; $j++) {
            if ($current[$j] === $current[$j - 1]) {
                $count++;
            } else {
                $next .= $count . $current[$j - 1];
                $count = 1;
            }
        }

        $next .= $count . $current[strlen($current) - 1];
        $sequence[] = $next;
    }

    echo $sequence[$lines - 1] . "\n";
    return true;
}
