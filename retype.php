<?php
$muj_string="Pepa";
$muj_integer=2;
$muj_float=-1.8;
$muj_boolean=FALSE;
// pokusíme se nějak přetypovat každou proměnnou...
echo "Typ proměnné muj_string byl <B>".gettype($muj_string)."</B>";
echo " a hodnota byla <B>".$muj_string."</B>. ";
settype($muj_string, "boolean");
echo "Po změně na <B>".gettype($muj_string)."</B> je hodnota <B>".$muj_string."</B>.<BR>\n";

echo "Typ proměnné muj_integer byl <B>".gettype($muj_integer)."</B>";
echo " a hodnota byla <B>".$muj_integer."</B>. ";
settype($muj_integer, "float");
echo "Po změně na <B>".gettype($muj_integer)."</B> je hodnota <B>".$muj_integer."</B>.<BR>\n";

echo "Typ proměnné muj_float byl <B>".gettype($muj_float)."</B>";
echo " a hodnota byla <B>".$muj_float."</B>. ";
settype($muj_float, "integer");
echo "Po změně na <B>".gettype($muj_float)."</B> je hodnota <B>".$muj_float."</B>.<BR>\n";

echo "Typ proměnné muj_boolean byl <B>".gettype($muj_boolean)."</B>";
echo " a hodnota byla <B>".$muj_boolean."</B>. ";
settype($muj_boolean, "integer");
echo "Po změně na <B>".gettype($muj_boolean)."</B> je hodnota <B>".$muj_boolean."</B>.<BR>\n";

$cislo=5;
echo "Typ je ".gettype($cislo)."<BR>\n";
$cislo/=2;
echo "Teď je typ ".gettype($cislo)."<BR>\n";

$boo = false; settype($boo, "float");
echo $boo, "\n";

$muj_float=3.5;
echo "Typ proměnné muj_float byl <B>".gettype($muj_float)."</B>";
echo " a hodnota byla <B>".$muj_float."</B>.<BR>\n";
echo "Na řetězec ->".(string)$muj_float."<BR>\n";
echo "Na celé číslo ->".(int)$muj_float."<BR>\n";
echo "Na boolean ->".(boolean)$muj_float."<BR>\n";
echo "Po všech těch změnách je ale typ proměnné stále <B>".gettype($muj_float)."</B> a hodnota <B>".$muj_float."</B>.<BR>\n";

echo is_bool(True);
?>