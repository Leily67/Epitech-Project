<?php
// Connexion à la base de données (remplacez les valeurs par les vôtres)
$host = "localhost";
$dbname = "nom_de_la_db";
$username = "votre_username";
$password = "votre_password";

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Traitement de la soumission du formulaire de création de note
if (isset($_POST['submit'])) {
    $note = $_POST['note'];
    $color = $_POST['color'];

    // Insérer la note dans la base de données avec la couleur
    $userId = $_SESSION['user_id'];
    $query = "INSERT INTO notes (user_id, content, color) VALUES (:userId, :content, :color)";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':content', $note);
    $stmt->bindParam(':color', $color);
    $stmt->execute();
}

// Suppression d'une note
if (isset($_GET['delete'])) {
    $noteId = $_GET['delete'];

    // Supprimer la note de la base de données
    $query = "DELETE FROM notes WHERE id = :noteId";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':noteId', $noteId);
    $stmt->execute();
}

// Traitement de la soumission du formulaire de mise à jour de note
if (isset($_POST['update'])) {
    $noteId = $_POST['noteId'];
    $editedNote = $_POST['editedNote'];

    // Mettre à jour la note dans la base de données
    $query = "UPDATE notes SET content = :editedNote, color = :color WHERE id = :noteId";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':editedNote', $editedNote);
    $stmt->bindParam(':color', $_POST['editedColor']);
    $stmt->bindParam(':noteId', $noteId);
    $stmt->execute();
}

// Récupérer les notes de l'utilisateur connecté depuis la base de données
$userId = $_SESSION['user_id'];
$query = "SELECT * FROM notes WHERE user_id = :userId";
$stmt = $bdd->prepare($query);
$stmt->bindParam(':userId', $userId);
$stmt->execute();
$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 20px;
        }
        .note-card {
            border: 2px solid #f2f2f2;
            border-radius: 10px;
            padding: 10px;
        }
        .note-card-content {
            background-color: inherit;
        }
    </style>
    <title>WacKeep</title>
</head>
<body>
    <h1>WacKeep</h1>

    <!-- Formulaire de création de note -->
    <form method="post" action="keep.php">
        <textarea name="note" placeholder="Créer une note"></textarea>
        <label for="color">Color :</label>
        <input type="color" id="color" name="color" value="#fefabc">
        <button type="submit" name="submit">Ajouter une note</button>
    </form>

    <!-- Affichage des notes -->
    <div class="grid-container">
        <?php foreach ($notes as $note) : ?>
            <div class="note-card" style="background-color: <?php echo $note['color']; ?>">
                <?php if (isset($_GET['edit']) && $_GET['edit'] == $note['id']) : ?>
                    <!-- Formulaire d'édition de la note -->
                    <form method="post" action="keep.php">
                        <textarea name="editedNote"><?php echo $note['content']; ?></textarea>
                        <label for="editedColor">Color :</label>
                        <input type="color" id="editedColor" name="editedColor" value="<?php echo $note['color']; ?>">
                        <input type="hidden" name="noteId" value="<?php echo $note['id']; ?>">
                        <button type="submit" name="update">Mettre à jour</button>
                    </form>
                <?php else : ?>
                    <!-- Champ d'affichage de la note -->
                    <div class="note-card-content"><?php echo $note['content']; ?></div>
                    <a href="keep.php?edit=<?php echo $note['id']; ?>">Modifier</a>
                    <a href="keep.php?delete=<?php echo $note['id']; ?>">Supprimer</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <br>
    <a href="register.php">Déconnexion</a>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js%22%3E"></script>
</body>
</html>
