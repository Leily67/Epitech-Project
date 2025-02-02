<?php
$fileDirectory = "mywac_files/";

if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];
    $filePath = $fileDirectory . $filename;

    if (file_exists($filePath)) {
        // Vérifier le type de fichier et afficher le contenu en conséquence
        $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
        switch ($fileExtension) {
            case 'pdf':
                // Afficher le fichier PDF avec PDF.js
                echo "<embed src='mywac_files/$filename' type='application/pdf' width='100%' height='600px' />";
                break;
            case 'jpg':
            case 'jpeg':
            case 'png':
            case 'gif':
                // Afficher l'image
                echo "<img src='mywac_files/$filename' alt='$filename' />";
                break;
            case 'html':
                // Afficher le code HTML
                echo file_get_contents($filePath);
                break;
            default:
                // Fichier non pris en charge, afficher le lien de téléchargement
                echo "Ce type de fichier n'est pas pris en charge. <a href='mywac_files/$filename' target='_blank'>Télécharger</a>";
                break;
        }
    } else {
        echo "Le fichier spécifié n'existe pas.";
    }
}
?>
