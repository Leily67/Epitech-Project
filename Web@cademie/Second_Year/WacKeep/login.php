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

// Rediriger l'utilisateur vers la page "keep.php" s'il est déjà connecté
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']); // Supprimer la session existante
}


// Traitement de la soumission du formulaire de connexion
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Requête pour vérifier les identifiants dans la base de données
    $query = "SELECT id FROM users WHERE username = :username AND password = :password";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Identifiants valides, initialiser la session et rediriger vers la page "keep.php"
        $_SESSION['user_id'] = $user['id'];
        header("Location: keep.php");
        exit();
    } else {
        // Identifiants invalides, afficher un message d'erreur
        $error = "Identifiants invalides";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>WacKeep</title>
</head>
<body>
<div class="login-reg-panel">
        <div class="login-info-box">
            <h2> Vous n'avez pas de compte ?</h2>
            <ul>
                <label id="label-register"><a href="home.php">Accueil</a></label>
                <input type="radio" id="log-reg-show">
                <label id="label-register"><a href="register.php">S'enregistrer</a></label>
                <input type="radio" id="log-reg-show">
            </ul>

    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

        <div class="white-panel">
            <div class="login-show">
    <form method="post" action="login.php">
                <h2>Se Connecter</h2>
                <input type="text" name="username" required placeholder="Pseudo">
                <input type="password" name="password" required placeholder="Mot de Passe">
                <input type="submit" @click="login" name="submit" value="Valider">
    </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>
