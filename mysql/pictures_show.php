<?php
require_once 'Db.php';

if (!isset($_GET["obrazek"])) die ("Nezadali jste číslo obrázku");

try {
    $dbh = new Db; // Connect to DB
    $sth = $dbh->prepare('select * from obrazky where id = :id'); 
    $sth->bindParam(":id", $_GET["obrazek"]);
    $sth->execute();
    if ($dbh->last_row_count() != 1) {
        die ("Nemáme takový obrázek");
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

header("Content-Type: image/jpeg");
echo $sth->fetch()['obrazek'];