<?php
$fileDirectory = "mywac_files/";

if (isset($_POST['filename']) && isset($_POST['content'])) {
    $filename = $_POST['filename'];
    $content = $_POST['content'];
    $filepath = $fileDirectory . $filename;

    if (file_exists($filepath)) {
        file_put_contents($filepath, $content);
        echo "Les modifications ont été enregistrées.";
    } else {
        echo "Le fichier spécifié n'existe pas.";
    }
} else {
    echo "Paramètres invalides.";
}
