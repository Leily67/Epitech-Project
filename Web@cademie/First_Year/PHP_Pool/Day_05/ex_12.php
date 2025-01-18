<?php
function get_execution_time(): float
{
    return round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 7);
}
