<?php
define ("NAZEV_SOUBORU", "pocitadlo.txt"); 
$soubor=fopen(NAZEV_SOUBORU, "c+"); 
$stav=fread($soubor, 10); 
rewind($soubor); 
fwrite($soubor,++$stav,10); 
fclose($soubor); 

echo "Již máme zaznamenáno $stav přístupů!!!";
