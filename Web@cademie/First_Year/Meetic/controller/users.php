<?php

error_reporting(-1);
ini_set('display_errors', 'On');

require_once '../model/user.php';

function registerUser()
{
    global $user;
    try {
        $user->create($_POST["first_name"], $_POST["last_name"], $_POST["birthday"], $_POST["gender_radio"], $_POST["city"], $_POST["mail"], $_POST["password"], "");
        echo json_encode([
            "code" => 201,
            "message" => "User created"
        ]);
    } catch (PDOException $e) {
        echo json_encode([
            "code" => 400,
            "message" => $e->getMessage()
        ]);
    }
}

function getUserById($id)
{
    global $user;
}

function getUsers()
{
    global $user;
}

function updateUser($id)
{
    global $user;
}

function deleteUser()
{
    global $user;
}

if (isset($_POST)) {
    registerUser();
} else if (isset($_GET)) {
}
