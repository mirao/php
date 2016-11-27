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
echo "Jedna kapsa {$kapsa1} " . 'a druhá kapsa taky '.$kapsa2, "\n";
?>