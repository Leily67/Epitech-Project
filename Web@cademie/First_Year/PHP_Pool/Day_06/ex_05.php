<?php
function json_to_object(string $json): object
{
    return json_decode($json);
}
