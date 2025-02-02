<?php
require_once('db.php');




class Genres extends Db {
    static function getGenres($genreId) {
        $db = Db::dbConnect();
        $query = $db->prepare('SELECT id AS "id", name AS "name" FROM genres LIMIT 10');
        $query->execute(array('genre_id' => $genreId));
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
    }
}

$genre = new Genres();
header('Content-Type: application/json');
// CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = Genres::getGenres($_GET['genreId']);
