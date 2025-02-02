<?php
if (isset($_POST['filename'])) {
    $filename = $_POST['filename'];
    $fileDirectory = "mywac_files/";

    $filepath = $fileDirectory . $filename;

    if (file_exists($filepath)) {
        if (unlink($filepath)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
