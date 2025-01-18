<?php
function break_cat(): void
{
    while ($line = fgets(STDIN)) {
        echo $line;
        if (trim($line) === "EOF") {
            break;
        }
    }
}
