<!DOCTYPE html>
<html>
<head>
    <title>WacDoc</title>
</head>
<body>
    <h1>Création et Upload de fichiers</h1>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <label for="filename">Nom du nouveau fichier (.mywac) :</label>
        <input type="text" name="filename" id="filename" required>
        <input type="submit" name="createFile" value="Créer le fichier">
    </form>

    <hr>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <label for="fileToUpload">Sélectionnez un fichier à uploader :</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <input type="submit" name="uploadFile" value="Uploader le fichier">
    </form>

    <hr>

    <?php
    $fileDirectory = "mywac_files/";

    // Traitement de la création du nouveau fichier
    if (isset($_POST['createFile'])) {
        $newFilename = $_POST['filename'] . '.mywac';
        $newFile = fopen($fileDirectory . $newFilename, 'w');
        fclose($newFile);
        echo "Le fichier $newFilename a été créé avec succès.";
    }

    // Traitement de l'upload du fichier
    if (isset($_POST['uploadFile'])) {
        $targetDirectory = $fileDirectory;
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Le fichier " . basename($_FILES["fileToUpload"]["name"]) . " a été uploadé avec succès.";
        } else {
            echo "Une erreur s'est produite lors de l'upload du fichier.";
        }
    }

    // Fonction pour supprimer un fichier
    function deleteFile($filename) {
        $fileDirectory = "mywac_files/";
        $filepath = $fileDirectory . $filename;

        if (file_exists($filepath)) {
            if (unlink($filepath)) {
                echo "Le fichier $filename a été supprimé avec succès.";
            } else {
                echo "Une erreur s'est produite lors de la suppression du fichier.";
            }
        } else {
            echo "Le fichier spécifié n'existe pas.";
        }
    }

    // Gestion de la suppression du fichier
    if (isset($_POST['deleteFile'])) {
        $filename = $_POST['deleteFile'];
        deleteFile($filename);
    }

    // Liste des fichiers .mywac existants dans le répertoire
    $mywacFiles = glob($fileDirectory . "*.mywac");
    if (!empty($mywacFiles)) {
        echo "<h2>Fichiers .mywac existants :</h2>";
        echo "<ul>";
        foreach ($mywacFiles as $file) {
            $filename = basename($file);
            echo "<li><a href='modif.php?filename=$filename'>$filename</a>";
            echo "<form action='index.php' method='POST' style='display:inline;'>
                    <input type='hidden' name='deleteFile' value='$filename'>
                    <input type='submit' value='Supprimer'>
                  </form>";
            echo "</li>";
        }
        echo "</ul>";
    }

    // Liste des fichiers uploadés
    $uploadedFiles = glob($fileDirectory . "*");
    if (!empty($uploadedFiles)) {
        echo "<h2>Fichiers uploadés :</h2>";
        echo "<ul>";
        foreach ($uploadedFiles as $file) {
            $filename = basename($file);
            if (substr($filename, -5) !== '.mywac') {
                echo "<li><a href='file_viewer.php?filename=$filename' target='_blank'>$filename</a>";
                echo "<form action='index.php' method='POST' style='display:inline;'>
                        <input type='hidden' name='deleteFile' value='$filename'>
                        <input type='submit' value='Supprimer'>
                      </form>";
                echo "</li>";
            }
        }
        echo "</ul>";
    }
    ?>

</body>
</html>
