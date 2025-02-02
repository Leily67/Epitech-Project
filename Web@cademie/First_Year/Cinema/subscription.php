<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Cinema</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="Description" content="Projet reproduction d'une plateforme de gestion d'une BDD">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <?php include 'main.php'; ?>


</head>

<body>
    <form action="subscription.php" method="POST">
        <div class="form_cont">
            <p>
                Sexe : <br />
                <input type="radio" name="choice" value="wom" id="wom"> <label for="wom">Femme</label>
                <input type="radio" name="choice" value="men" id="men"> <label for="men">Homme</label>
                <input type="radio" name="choice" value="other" id="other"> <label for="other"> Autre</label>
            </p>

            <div>
                <label for="name">Nom : </label>
                <input type="text" id="name" name="first_name"><p>
            </div>
            <div>
                <label for="lname"> Prénom : </label>
                <input type="text" id="lname" name="last_name"><p>
            </div>
            <div>
                <label for="mail">E-mail : </label>
                <input type="email" name="user_mail" id="mail"><p>
            </div>
            <div>
                <label for="bday">Date de naissance : </label>
                <input type="date" name="bday" id="bday"><p>
            </div>
            <div class="button">
                <button type="submit">Envoyer</button>
            </div>
    </form>
    </div>

</body>

</html>



