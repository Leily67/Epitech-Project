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
    <div class="container">
  <div class="card">
    <img src="assets/movie.png" alt="Person" class="card__image">
    <p class="card__name">FILMS</p>
<button class="btn draw-border">
    <form class="movie" action="" method="GET">
            <input name="movie" type="text">
            <?php
                require_once("lib/genre.php");
                echo GenreFilter();
            ?>
            <input type="submit">
        </form>
    </button>

  </div>
  <div class="card">
    <img src="assets/member.png" alt="Person" class="card__image">
    <p class="card__name">MEMBRES</p>

    <button class="btn draw-border">
        <form class="members" action="" method="GET">
            <input name="members" type="text">
            <?php
                require_once("./lib/members.php");
                echo searchmembers($input);
                
            ?>
            <input type="submit">
        </form></button>
    
  </div>
  <div class="card">
    <img src="assets/form.png" alt="Person" class="card__image">
    <p class="card__name">INSCRIPTION</p>

    <button class="btn draw-border">...</button>
    
  </div>
</div>

        </div>
    </div>


            <?php
                if (isset($_GET["members"])) {
                    $members = searchmembers($_GET["members"]);
                    foreach ($members as $member) {
                    echo "<p>" . $member['firstname'] . "---" . $member['lastname'] . "</p>";
                    }
                }
            ?>
            </select>
            <input type="submit">
    </form>
        </div>
    </div>
    </body>
</html>