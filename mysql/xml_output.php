<?php
require_once 'Db.php';

$dbh = new Db; // Connect to DB
$dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

$vysledek = $dbh->query ("SELECT * FROM psc WHERE psc=47001");
header("Content-Type: text/xml");
echo("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n");
echo("<obce>\n");
foreach ($vysledek as $row) {
  echo ("\t<obec>\n");
  echo ("\t\t<psc>\n");
  echo "\t\t\t".$row["psc"]."\n";
  echo ("\t\t</psc>\n");
  echo ("\t\t<nazev>\n");
  echo "\t\t\t".$row["nazcobce"]."\n";
  echo ("\t\t</nazev>\n");
  echo ("\t</obec>\n");
}
echo("</obce>\n"); 