<?php
function my_mail(string $mail): void
{
    if (strpos($mail, '@') === false || strpos($mail, '.') === false) {
        return;
    }
    $start = strpos($mail, '@') + 1;
    $end = strrpos($mail, '.');
    echo substr($mail, $start, $end - $start) . PHP_EOL;
}
