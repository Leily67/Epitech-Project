<?php
function my_cat_files(string ...$paths): string
{
    $content = "";
    foreach ($paths as $path) {
        if (file_exists($path)) {
            $content .= file_get_contents($path) . "\n_____";
        }
    }
    return rtrim($content, "_");
}
