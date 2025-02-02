<!DOCTYPE html>
<html>
<head>
    <title>Modification de fichier</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="my_wysiwyg.js"></script>
</head>
<body>
    <h1>Modification de fichier</h1>

    <div class="dropdown">
        <a href="#">Fichier</a>
        <div class="dropdown-content">
            <a class="save-button" href="#">Enregistrer</a>
            <a class="save-as-button" href="#">Enregistrer sous</a>
            <div class="save-as-content" style="display: none;">
                <a class="save-as-html-button" href="#">HTML</a>
                <a class="save-as-pdf-button" href="#">PDF</a>
            </div>
            <a class="return-button" href="../index.php">Retour</a>
        </div>
    </div>

    <?php
    $fileDirectory = "mywac_files/";
    if (isset($_GET['filename'])) {
        $filename = $_GET['filename'];
        $filepath = $fileDirectory . $filename;

        if (file_exists($filepath)) {
            $content = file_get_contents($filepath);
            echo "<h2>Contenu du fichier :</h2>";
            echo "<div id='wysiwyg' class='editor' contenteditable='true'>$content</div>";
        } else {
            echo "Le fichier spécifié n'existe pas.";
        }
    } else {
        echo "Nom de fichier manquant.";
    }
    ?>

    <script>
        $(document).ready(function() {
            $(".save-button").on("click", function(e) {
                e.preventDefault();
                saveContent();
            });

            $(".save-as-html-button").on("click", function(e) {
                e.preventDefault();
                saveAsFormat("html");
            });

            $(".save-as-pdf-button").on("click", function(e) {
                e.preventDefault();
                saveAsFormat("pdf");
            });

            function saveContent() {
                var filename = "<?php echo $filename; ?>";
                var content = $("#wysiwyg").html();

                $.post("save.php", { filename: filename, content: content })
                    .done(function(response) {
                        alert(response);
                    })
                    .fail(function() {
                        alert("Une erreur s'est produite lors de la sauvegarde du fichier.");
                    });
            }

            function saveAsFormat() {
                var filename = "<?php echo pathinfo($filename, PATHINFO_FILENAME); ?>";
                var content = $("#wysiwyg").html();

                var saveAsContent = $(".save-as-content");
                saveAsContent.toggle(); // Afficher ou masquer les options de format

                $(".save-as-html-button").on("click", function(e) {
                    e.preventDefault();
                    var htmlFilename = filename + ".html";
                    saveFile(htmlFilename, content);
                    saveAsContent.hide(); // Masquer les options de format après l'enregistrement
                });

                $(".save-as-pdf-button").on("click", function(e) {
                    e.preventDefault();
                    var pdfFilename = filename + ".pdf";
                    saveFile(pdfFilename, content);
                    saveAsContent.hide(); // Masquer les options de format après l'enregistrement
                });
}

function saveFile(filename, content) {
    var form = $('<form action="save.php" method="POST" style="display: none;">' +
        '<input type="hidden" name="filename" value="' + filename + '">' +
        '<input type="hidden" name="content" value="' + content + '">' +
        '</form>');
    $('body').append(form);
    form.submit();
}

        });
    </script>
</body>
</html>
