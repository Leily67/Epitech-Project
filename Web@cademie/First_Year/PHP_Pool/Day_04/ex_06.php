<?php
function get_angry_bird(int $nbr): string
{
    $result = '';
    for ($i = 0; $i < $nbr; $i++) {
        $result .= 'piou';
    }
    return $result . "\n";
}
