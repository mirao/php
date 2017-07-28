<?php
// Add a response header
Header("PHP: " . PHP_VERSION);

// Print all request headers
$hlavicky = getallheaders(); 
foreach ($hlavicky as $nazev => $hodnota) {
   echo "$nazev: $hodnota<br>\n"; 
}
