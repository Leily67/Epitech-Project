<?php
function get_authorized_users(string $permission, array $users): void
{
    foreach ($users as $user) {
        if (in_array($permission, $user['permissions'])) {
            echo $user['login'] . "\n";
        }
    }
}
