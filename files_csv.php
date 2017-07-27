<?php
$radek = 1; 
$soubor = fopen ("30_data.csv","r"); 
while ($data = fgetcsv($soubor, 1000)) 
{ 
  echo "<p>Zpracovávam řádek č.$radek: <br>"; 
  $radek++; 
  foreach ($data as $polozka) 
  { 
    print $polozka. "<br>"; 
  } 
} 
fclose ($soubor);
