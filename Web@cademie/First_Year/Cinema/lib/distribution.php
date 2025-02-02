<?php

require('db.php');

function distribution() {
    global $db;
    $request = $db->prepare("SELECT * FROM distributor");
    $request->execute();
    return $request->fetchAll();
}
