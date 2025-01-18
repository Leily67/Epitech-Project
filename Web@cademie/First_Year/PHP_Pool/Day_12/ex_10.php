<?php

if (isset($argv)) {
    array_shift($argv);
    foreach ($argv as $input) {
        echo sha1($input) . "\n";
    }
}
