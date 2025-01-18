<?php
function check_user_acl(array $user, string $permission): bool
{
    return in_array($permission, $user['permissions']);
}
