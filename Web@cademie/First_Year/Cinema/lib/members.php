<?php

require('db.php');
error_reporting(-1);
ini_set('display_errors', 'On');

function searchmembers($input) {
    global $db;
    $request = $db->prepare("SELECT * FROM membership m INNER JOIN subscription s on m.id_subscription = s.id INNER JOIN user u on u.id = m.id_user where u.firstname like 'firstname' or u.lastname like 'lastname'");
    $request->execute(['%input%']);
    return $request->fetchAll();
}
?>
