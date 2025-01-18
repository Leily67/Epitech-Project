<?php
function check_types(array $types): bool
{
    foreach ($types as $type => $values) {
        foreach ($values as $value) {
            if (gettype($value) !== $type) {
                return false;
            }
        }
    }
    return true;
}
