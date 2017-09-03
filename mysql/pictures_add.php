<?php
require_once 'Db.php';

try {
    $dbh = new Db; // Connect to DB
    $image = "test.jpg";
    $fp = fopen($image, "rb"); 
    $binarydata = addslashes(fread($fp, filesize($image))); 
    $dbh->exec("insert into obrazky (obrazek) values ('" . $binarydata . "')"); 
    fclose($fp);
} catch (PDOException $e) {
    echo("Error: " . $e->getMessage());
}

echo "Image $image has been uploaded to DB, id = " . $dbh->lastInsertId(); 