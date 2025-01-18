<?php
function check_email(): void
{
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (
            strpos($email, ' ') === false &&
            strpos($email, "\t") === false &&
            substr_count($email, '@') === 1 &&
            strpos($email, '.', strpos($email, '@')) !== false
        ) {
            echo "courriel valide\n";
        } else {
            echo "courriel invalide\n";
        }
    }
}
