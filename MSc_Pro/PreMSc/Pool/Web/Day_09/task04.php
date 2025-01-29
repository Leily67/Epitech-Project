<?php

function whoami() {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $age = isset($_POST['age']) && is_numeric($_POST['age']) ? intval($_POST['age']) : null;

    if($name && $age) {
        echo "Hi, my name is {$name} and I'm {$age} years old.";
    } elseif(!$name && $age) {
        echo "Hi, I have no name and I'm {$age} years old.";
    } elseif($name && !$age) {
        echo "Hi, my name is {$name}.";
    } else {
        echo "Hi, I have no name.";
    }
}