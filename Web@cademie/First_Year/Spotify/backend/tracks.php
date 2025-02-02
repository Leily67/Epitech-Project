<?php

require_once('db.php');



class Tracks extends Db {
    static function getTracks($trackId) {
        $db = Db::dbConnect();
        $query = $db->prepare('SELECT id AS "id", album_id AS "album_id", name AS "name", track_no AS "track_no", duration as "duration", mp3 as "mp3 FROM tracks LIMIT 10');
        $query->execute(array('track_id' => $trackId));
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
    }
}

$genre = new Tracks();
header('Content-Type: application/json');
// CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = Tracks::getTracks($_GET['trackId']);

echo $data;