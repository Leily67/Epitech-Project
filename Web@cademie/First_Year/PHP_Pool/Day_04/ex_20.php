<?php
function continue_cat(): void
{
    while ($line = fgets(STDIN)) {
        if (trim($line) === "EOF") {
            echo $line;
            break;
        }
        echo $line;
        continue;
    }
}
