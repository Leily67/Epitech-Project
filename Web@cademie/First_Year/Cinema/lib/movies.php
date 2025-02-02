<?php

require('db.php');

function getMoviesList($movie, $distributor = null, $genre = null) {
    global $db;
    $params = array(
        "movie" => "%".$movie."%",
    );
    $sql = "SELECT * FROM movie m
    INNER JOIN distributor d ON m.id_distributor = d.id
    INNER JOIN movie_genre mg ON mg.id_movie = m.id
    INNER JOIN genre g ON mg.id_genre = g.id
    WHERE m.title LIKE :movie";
    if ($distributor) {
        $sql = $sql." AND d.name = :distributor";
        $params["distributor"] = $distributor;
    }
    if ($genre) {
        $sql = $sql." AND g.name = :genre";
        $params["genre"] = $genre;
    }
    $request = $db->prepare($sql);
    $request->execute($params);
    $movies = $request->fetchAll();
    ob_start();
    ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie): ?>
                <tr>
                    <td><?= $movie["name"] ?></td>
                    <td><?= $genre["name"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
}