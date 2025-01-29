<?php

function render_body($page) {
    if (in_array($page, ["home", "php", "sql"])) {
        if (file_exists($page . ".html")) {
            return file_get_contents($page . ".html");
        }
    }
    return "<p>Unknown page</p>";
}
