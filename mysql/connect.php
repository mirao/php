<?php
require_once 'Db.php';

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
    $dbh = new Db; // Connect to DB
    // Query
    $sth = $dbh->query('SELECT * FROM names');
    printResults($sth);
} catch (PDOException $e) {
    var_dump("Error: " . $e->getMessage());
    die();
}