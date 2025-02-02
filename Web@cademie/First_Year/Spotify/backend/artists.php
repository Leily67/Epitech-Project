<?php


require_once('db.php');



class Artists extends Db {
    static function getArtists($artistId) {
        $db = Db::dbConnect();
        $query = $db->prepare('SELECT id AS "id", name AS "name", description AS "description", bio AS "bio", photo AS "photo" FROM artists LIMIT 10');
        $query->execute(array('artist_id' => $artistId));
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
    }
}

$artist = new Artists();
header('Content-Type: application/json');
// CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = Artists::getArtists($_GET['artist_id']);

echo $data;