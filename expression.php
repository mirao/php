<?php
$jazyk="PHP";
$verze=4;
$verzejazyka=$verze;
echo $verzejazyka, PHP_EOL;

define ("BROWSER", "Firefox 1.0");
define ("OS", "GNU/Linux");
echo "Váš browser je ".BROWSER." a Váš systém je ".OS, PHP_EOL;

$dnesnidatum = Date("r");
echo $dnesnidatum, PHP_EOL;

// mohu přiřadit postupně
$kapsa1="prázdná"; $kapsa2="prázdná";
// nebo $kapsa1 a hned taky $kapsa2
$kapsa2=($kapsa1="prázdná");
// závorky ale můžu vynechat
$kapsa2=$kapsa1="prázdná";
echo "Jedna kapsa ${kapsa1} " . 'a druhá kapsa taky '.$kapsa2, "\n";

$bajtu = 0;
$bajtu = $bajtu + 100;
$bajtu = $bajtu * 2;
$bajtu /= 4;
echo $bajtu, "\n";

$pokoju=2;
$pokoju_po_zmene=++$pokoju;
echo $pokoju_po_zmene, "\n";

$sql="select id, nazev, prijmeni, jmeno, ulice, psc, mesto ";
$sql.="from zakaznik inner join objednavka on zakaznik.id = objednavka.zakaznik ";
$sql.="where zakaznik.id = 7200";

print_r($sql . "\n");
echo $sql . "\n"
?>