<?php
echo 1/0,"\n"; // skončí chybou Division by zero
echo @(1/0),"\n"; // půjde dál

$a=5; $b=6;
echo $a<$b,"\n"; // vrátí TRUE
echo $b>$a,"\n"; // rovněž TRUE
echo $b>=$a,"\n";
echo $a<=$b,"\n";
echo $a<>$b,"\n"; //nerovnost, stejné jako
echo $a!=$b,"\n";

$a=5; $b=6;
echo $a=$b,"\n";

$a=5; $b=6;
echo (integer)($a==$b),"\n"; //vrátí 0 (FALSE)
// ale hodnoty proměnných se nezměnily
echo $a,$b,"\n";

$muj_integer=5;
$muj_integer2=5;
$muj_float = 5.0;
echo $muj_integer==$muj_float,"\n"; //to je pravda
echo $muj_integer===$muj_float,"\n"; //tohle pravda není
echo $muj_integer===$muj_integer2,"\n"; //tohle pravda je

$jmeno = "Mira";
echo $jmeno == "Mira" ? "Obr" : "Dzobr", "\n";
$stav_uctu = 10000;
$stav_uctu>10000 ? $vyber=5000 : $vyber=2000;
echo $vyber;
?>