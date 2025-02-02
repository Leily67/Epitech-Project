<?php

require_once("../model/Db.php");

class Users extends Db {

    static function lookfor($search) {
        $db = Db::dbConnect();
        $searched = "%".$search."%";
        $query = $db->prepare('SELECT birthdate, profile_picture, lastname, firstname, username FROM users WHERE firstname LIKE :search OR lastname LIKE :search OR username LIKE :search');
        $query-> execute(array("search" => $searched));
        $result = $query->fetchAll();
        return $result;
    }
}