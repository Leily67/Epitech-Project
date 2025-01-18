<?php
function return_calls(string $functionName, array $args): mixed
{
    static $callCount = 0;

    if (!function_exists($functionName)) {
        return false;
    }

    try {
        $callCount++;
        call_user_func_array($functionName, $args);
        return $callCount;
    } catch (Throwable $e) {
        return false;
    }
}
