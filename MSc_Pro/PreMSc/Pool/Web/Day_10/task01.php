<?php
header('Content-Type: application/json');

if (isset($_GET['name'])) {
    echo json_encode(['name' => $_GET['name']]);
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Name not provided']);
}