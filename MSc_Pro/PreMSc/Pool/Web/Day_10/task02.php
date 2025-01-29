<?php
header('Content-Type: application/json');

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['isValid' => true]);
    } else {
        http_response_code(400);
        echo json_encode(['isValid' => false]);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Email not provided']);
}
?>
