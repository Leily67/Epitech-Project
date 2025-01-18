<?php
if ($argc < 2) {
    echo "Usage: php bonus.php <string1> <string2> ...\n";
    exit(1);
}

for ($i = 1; $i < $argc; $i++) {
    echo md5($argv[$i]) . "\n";
}
