<?php

spl_autoload_register(function ($className) {
    include $className . ".class.php";
});

$paladin = new Paladin("Jean-Luc");
$paladin->moveRight();
$paladin->takeWeapon();
