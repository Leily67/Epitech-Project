<?php

function resum_join_str(string $chaine_1, string $chaine_2): mixed
{
    if (empty($chaine_1) || empty($chaine_2)) {
        return false;
    }
    $firstPart = substr($chaine_1, 0, 12);
    $secondPart = substr($chaine_2, -8);

    $firstPart .= str_repeat('.', max(0, 12 - strlen($firstPart)));
    $secondPart = str_repeat('.', max(0, 8 - strlen($secondPart))) . $secondPart;

    return $firstPart . $secondPart;
}
