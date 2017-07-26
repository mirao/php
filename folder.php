<?php 
$folderName = "false";
$slozka = dir($folderName); 
while($soubor=$slozka->read()) { 
  if ($soubor=="." || $soubor=="..") continue; 
  echo "<a href=\"$folderName/$soubor\">".$soubor."</a><br>\n"; 
} 
$slozka->close();

// Alternative
$files = scandir($folderName);
foreach ($files as $file) {
  if ($file=="." || $file=="..") continue; 
  echo "<a href=\"$folderName/$file\">".$file."</a><br>\n"; 
} 