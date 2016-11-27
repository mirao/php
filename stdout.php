<?php
// run it as: php -S 0.0.0.0:8000 stdout.php

$path = $_SERVER["SCRIPT_FILENAME"];

file_put_contents("php://stdout", "\nRequested: $path");
echo "<p>Hello World</p>";
?>