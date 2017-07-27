<?php 
$soubor = "31_test.html"; 

// header("Content-Description: File Transfer"); 
// header("Content-Type: application/force-download"); 
header("Content-Disposition: attachment; filename=\"$soubor\""); 

// readfile ($soubor);
echo date("r"); 
