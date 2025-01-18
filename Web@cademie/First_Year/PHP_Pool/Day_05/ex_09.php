<?php
function post_levenshtein_score(): mixed
{
    if (isset($_POST['str_one'], $_POST['str_two'])) {
        return levenshtein($_POST['str_one'], $_POST['str_two']);
    }
    return null;
}
