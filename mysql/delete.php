<?php
require_once 'Db.php';

try {
    $dbh = new Db; // Connect to DB
    /* Delete all rows from the SOFTWARE table */
    $del = $dbh->prepare('DELETE FROM software where id >= 15');
    $del->execute();

    /* Return number of rows that were deleted */
    print("Return number of rows that were deleted:\n");
    $count = $del->rowCount();
    print("Deleted $count rows.\n");
} catch (PDOException $e) {
    echo("Error: " . $e->getMessage());
}
