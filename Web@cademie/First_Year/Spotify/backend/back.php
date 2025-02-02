<?php

require_once('db.php');



class Genres_Albums extends Db {
    static function getGenres_Albums($genreAlbumId) {
        $db = Db::dbConnect();
        $query = $db->prepare('SELECT genre_id AS "genre_id", album_id AS "album_id" FROM genres_albums LIMIT 10');
        $query->execute(array('genre_album_id' => $genreAlbumId));
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
    }
}

$genre_album = new Genres_Albums();
header('Content-Type: application/json');
// CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = Genres_Albums::getGenres_Albums($_GET['genre_album_id']);

echo $data;