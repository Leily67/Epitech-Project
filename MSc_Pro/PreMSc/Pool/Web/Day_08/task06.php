<?php

function sequence($n) {
    if ($n < 0) {
        return;
    }

    $current = "1";
    for ($i = 0; $i <= $n; $i++) {
        echo $current . PHP_EOL;

        $next = "";
        $count = 1;
        for ($j = 1; $j < strlen($current); $j++) {
            if ($current[$j] === $current[$j - 1]) {
                $count++;
            } else {
                $next .= $count . $current[$j - 1];
                $count = 1;
            }
        }
        $next .= $count . $current[strlen($current) - 1];
        $current = $next;
    }
}

?>
