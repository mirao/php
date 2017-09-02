<?php
require_once 'Db.php';

$dbh = new Db; // Connect to DB
$dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
$id = uniqid();
$soubor = "/tmp/data$id.txt";
$sth = $dbh->query("SELECT * FROM psc WHERE psc=47001 INTO OUTFILE '".$soubor."'");
// To allow read from /tmp it's needed to have PrivateTmp=false in /lib/systemd/system/apache2.service
$file = fopen($soubor, "r");
while(! feof($file))
{
    echo fgets($file). "<br />";
}
fclose($file);

// Manual way
$vysledek = $dbh->query ("SELECT * FROM psc WHERE psc=47001");
foreach ($vysledek as $zaznam) {
  $obsah .= $zaznam["nazcobce"];
  $obsah .= "\t";
  $obsah .= $zaznam["psc"];
  $obsah .= "\n";    
}

$data = "data.txt";
$soubor=fopen($data, "w"); 
fwrite($soubor, $obsah); 
fclose($soubor); 

$file = file_get_contents($data);
echo nl2br($file);