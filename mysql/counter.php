<?php
require_once 'Db.php';

try {
    $dbh = new Db; // Connect to DB
    $dbh->exec("update pocitadlo set pocet = pocet + 1");
    $vysledek = $dbh->query("select pocet from pocitadlo");
    $celkem = $vysledek->fetchColumn();
} catch (PDOException $e) {
    echo("Error: " . $e->getMessage());
}

echo "Již máme zaznamenáno $celkem přístupů!!!"; 
