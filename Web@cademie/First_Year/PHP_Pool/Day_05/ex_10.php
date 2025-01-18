<?php
function my_get_weird_info(): mixed
{
    if (!isset($_GET['nbr_elem']) || !is_numeric($_GET['nbr_elem'])) {
        return null;
    }

    $nbr_elem = (int)$_GET['nbr_elem'];
    $count = 0;

    foreach ($_GET as $key => $value) {
        if ($count >= $nbr_elem) {
            break;
        }
        echo "\$_GET[\"$key\"] = $value\n";
        $count++;
    }

    return 0;
}
