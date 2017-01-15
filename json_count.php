<?php
// count JSON objects in array
$json_string = file_get_contents('/tmp/requisitions.json');
echo count(json_decode($json_string, true)), "\n";
?>