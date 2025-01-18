<?php
function my_aff_global(): void
{
    foreach ($GLOBALS as $key => $value) {
        if (is_string($value)) {
            echo "$key => $value\n";
        }
    }
}
