<?php

function getDb($host, $port, $dbname, $username, $password) {
    try {
        $db = new PDO(
            "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
            $username,
            $password
        );
        return $db;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

$db = getDb("127.0.0.1", "3306", "meat_hic", 'leily', 'Ni269bjaa');