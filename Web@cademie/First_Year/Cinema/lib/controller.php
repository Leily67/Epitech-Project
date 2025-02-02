<?php

function indexController() {
    ob_start();
    if (isset($_GET["movie"]) && isset($_GET["genre"])) {
        <form>
            <input name="movie" type="text">
            
            <input type="submit">
        </form>
        
            $movies = searchMovies($_GET["movie"], genre: $_GET["genre"]);
            foreach ($movies as $movie) {
                echo "<p>".$movie["title"]."</p>";
            }
        return ob_get_clean();
    }
}

function membersController()
{
  
}