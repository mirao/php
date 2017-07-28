<?php
require "config.php";

/** Print results */
function printResults($sth) {
    echo "<table>";
    echo "<tr><th>Id</th><th>Name</th><th>Age</th></tr>";
    foreach ($sth as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

try {
    // Connect
    $dbh = new PDO('mysql:host=' . SQL_HOST . ';dbname=' . SQL_DBNAME, SQL_USERNAME, SQL_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Query
    $sth = $dbh->query('SELECT * FROM names');
    printResults($sth);
    $dbh = null;
} catch (PDOException $e) {
    var_dump("Error: " . $e->getMessage());
    die();
}