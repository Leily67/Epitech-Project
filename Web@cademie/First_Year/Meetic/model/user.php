<?php

require_once 'db.php';

class User {
    public static function create($firstname, $lastname, $birthday, $gender, $city, $email, $password, $hobbies) {
        global $db;
        $stmt = $db->prepare("INSERT INTO users (firstname, lastname, birthday, gender, city, email, password, hobbies) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$firstname, $lastname, $birthday, $gender, $city, $email, $password, $hobbies]);
    }

    public static function list() {
    }

    public static function getById($id) {
    }

    public static function update($id) {
    }
}

$user = new User;