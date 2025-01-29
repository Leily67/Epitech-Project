<?php

function dynamic_body() {
    $page = isset($_GET['page']) ? $_GET['page'] : null;

    if(in_array($page, ["home", "php", "sql"])) {
        if(file_exists($page . ".html")) {
            return file_get_contents($page . ".html");
        }
    }

    return "<p>Unknown page</p>";
}