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

// Traitement de la soumission du formulaire d'inscription
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier si l'utilisateur existe déjà
    $query = "SELECT id FROM users WHERE username = :username";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // L'utilisateur existe déjà, afficher un message d'erreur
        $error = "Ce nom d'utilisateur est déjà utilisé.";
    } else {
        // Insérer le nouvel utilisateur dans la base de données
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Rediriger l'utilisateur vers la page "login.php" après l'inscription réussie
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <title>WacKeep</title>
</head>
<body>
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h1>Vous avez un compte ?</h1>
            <ul>
                <label id="label-register"><a href="home.php">Accueil</a></label>
                <input type="radio" id="log-reg-show">
                <label id="label-register"><a href="login.php">Se connecter</a></label>
                <input type="radio" id="log-reg-show">
            </ul>   

            <?php if (isset($error)) : ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
        <div class="white-panel">
            <div class="register-show">
                <form method="post" action="register.php">
                    <h2>S'enregister</h2>
                    <input type="text" name="username" placeholder="Pseudo">
                    <input type="password" name="password" placeholder="Mot de passe">
                    <input type="submit" name="submit" value="Valider">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
