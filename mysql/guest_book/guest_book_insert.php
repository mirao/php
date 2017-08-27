<?php
require_once '../Db.php';

try {
    $dbh = new Db; // Connect to DB
    $stmt = $dbh->prepare("insert into kniha_hostu (cas, vzkaz) values (:cas, :vzkaz)");
    $stmt->bindParam(":cas", time());
    $stmt->bindParam(":vzkaz", $_POST["vzkaz"]);
    $stmt->execute();
} catch (PDOException $e) {
    echo("Error: " . $e->getMessage());
}

$path=substr($_SERVER["SCRIPT_NAME"], 0, strrpos($_SERVER["SCRIPT_NAME"], "/"))."/guest_book_list.php";
Header("Location: http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$path);
