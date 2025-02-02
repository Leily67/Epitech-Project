<?php


require_once('db.php');



class Albums extends Db {
    static function getAlbums($albumId) {
        $db = Db::dbConnect();
        $query = $db->prepare('SELECT al.cover as "album_cover", al.description as "album_description", al.name as "album_name", al.release_date as "album_release", g.name as "genre", tr.name as "track_name", tr.track_no as "track_no", tr.duration as "track_duration", tr.mp3 as "track_mp3", ar.photo as "artist_photo", ar.name as "artist_name", ar.description as "artist_description", ar.bio as "artist_bio" FROM albums al INNER JOIN artists ar ON ar.id = al.artist_id INNER JOIN tracks tr ON tr.album_id = al.id INNER JOIN genres_albums gl ON gl.album_id = al.id INNER JOIN genres g ON g.id = gl.genre_id WHERE al.id = :album_id;');
        $query->execute(array('album_id' => $albumId));
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
    }
}

$album = new Albums();
header('Content-Type: application/json');
// CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = Albums::getAlbums($_GET['albumId']);

echo $data;