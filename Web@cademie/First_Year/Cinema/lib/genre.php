<?php

require('db.php');
function GenreFilter() {
    global $db;
    $request = $db->prepare("SELECT * FROM genre");
    $request->execute();
    $genres = $request->fetchAll();
    ob_start();
    ?>
    <select name="genre">
        <?php foreach ($genres as $genre): ?>
            <option value=<?= $genre["name"] ?>><?= $genre["name"] ?></option>
        <?php endforeach; ?>
    </select>
    <?php
    return ob_get_clean();
}