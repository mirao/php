<?php
require_once 'Db.php';

try {
    $db = new Db; // Connect to DB
    $dbh = $db->dbh;

    $table = "zamestnanci";
    echo "Creating table $table ...<br>";
    // Query
    $sth = $dbh->query("CREATE TABLE $table (
        jmeno varchar(10),
        prijmeni varchar(15),
        cislo int,
        datum_narozeni date
        )"
    );
    echo "Table has been created";

} catch (PDOException $e) {
    var_dump("Error: " . $e->getMessage());
    die();
}