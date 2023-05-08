<?php
    $db = new SQLite3('/var/www/html/r209-db-01.sqlite');
    $res = $db->querySingle('SELECT * FROM mangas');
    echo $res . "\n";
    // $results = $db->query('SELECT * FROM mangas');
    // echo $results;
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        echo $id;
        }
    while ($row = $res->fetchArray()) {
        echo "{$row['mangaId']} {$row['displayName']}"
    }
    ?>