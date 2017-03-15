<?php
$fronta[1]="Petr";
$fronta[2]="Pavel";
$fronta[3]="Maruška";
$fronta[4]="Eva";
$fronta[5]="LinuxSoft tým";
echo $fronta[1], " a ", $fronta[2], "\n";

$obyvatel["Praha"]=1000000;
$obyvatel["Ústí nad Labem"]=100000;
$obyvatel["Horní Lhota"] = 350;
echo $obyvatel["Horní Lhota"], PHP_EOL;
echo ++$obyvatel["Horní Lhota"], PHP_EOL;
echo $obyvatel["Horní Lhota"], PHP_EOL;

//[řádek] [sloupec] (zleva odspodu)
$figura[1][1]="bílá věž";
$figura[1][2]="bílý jezdec";
//...atd...
$figura[2][8]="bílý pěšec";
//...atd...
$figura[8][7]="černý jezdec";
$figura[8][8]="černá věž";
echo $figura[8][7], PHP_EOL;

$figura["a"][1]="bílá věž";
$figura["b"][1]="bílý jezdec";
//...atd...
$figura["h"][2]="bílý pěšec";
//...atd...
$figura["g"][8]="černý jezdec";
$figura["h"][8]="černá věž";
echo "Na poli b1 je při zahájení šachové partie ".$figura["b"][1], PHP_EOL;

$pole[1] = "Hej";
$pole[] = "Rup";
echo $pole[1], $pole[2];
$fronta=Array("Petr", "Pavel", "Maruška", "Eva", "LinuxSoft tým");
echo $fronta[1], PHP_EOL;
print_r($fronta);
$fronta=Array(1=>"Petr", "Pavel", "Maruška", "Eva", "LinuxSoft tým");
echo $fronta[1], PHP_EOL;
print_r($fronta);
$frontab = ["first_name" => "Mira", "last_name" => "Obr"];
print_r($frontab);
var_dump($frontab);
echo '<pre>'; print_r(array_keys($frontab)); echo '</pre>';
echo '<pre>'; print_r($frontab); echo '</pre>';

$os=Array("íránec", "Linux", "Čeština", "Windows", "solaris", "FreeBSD");
echo '<pre>'; print_r($os); echo '</pre>';
$os_to_sort = $os;
setlocale(LC_COLLATE, "cs_CZ.UTF-8");
sort($os_to_sort, SORT_LOCALE_STRING);
echo '<pre>Sorted:<br>'; print_r($os_to_sort); echo '</pre>';
rsort($os_to_sort, SORT_LOCALE_STRING);
echo '<pre>RSorted:<br>'; print_r($os_to_sort); echo '</pre>';

foreach ($os as $my_os)
   echo "Systém: $my_os<br>\n";

for ($i = 0; $i < count($os); ++$i)
    echo "$i: $os[$i]<br>";

echo '<pre>'; print_r(explode(" ", "Ret e zec")); echo '</pre>';
echo '<pre>'; print_r(implode("", $os)); echo '</pre>';

echo '<pre>'; print_r(str_split("Ret e zec")); echo '</pre>';

define ("CENZUROVANO", "[ !!! Censored !!!]");

function cenzuruj($text)
{
  $SpatnaSlova = Array("Windows", "Microsoft", "databáze");
  $RozdelText = explode(" ", $text);
  $PoCenzure = "";
  foreach ($RozdelText as $TestovaneSlovo) {
    if (in_array($TestovaneSlovo, $SpatnaSlova))
      $TestovaneSlovo=CENZUROVANO;
   $PoCenzure=$PoCenzure." ".$TestovaneSlovo;
  }
  return $PoCenzure;
}

// alternative solution
function cenzuruj2($text)
{
  $SpatnaSlova = Array("Windows", "Microsoft", "databáze");
  foreach ($SpatnaSlova as $SpatneSlovo)
    $text = str_replace($SpatneSlovo, CENZUROVANO, $text);
  return $text;
}
echo cenzuruj("Nejlepší softwarová firma na světě je Microsoft."), "<br>";
echo cenzuruj(" Její operační systém Windows je ukázkou výkonu, stability a bezpečnosti."), "<br>";
echo cenzuruj("Linuxová databáze is the best, stejně tak Windows databáze!"), "<br>";
echo cenzuruj2("Nejlepší softwarová firma na světě je Microsoft."), "<br>";
echo cenzuruj2(" Její operační systém Windows je ukázkou výkonu, stability a bezpečnosti."), "<br>";
echo cenzuruj2("Linuxová databáze is the best, stejně tak Windows databáze!"), "<br>";
?>
