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
print_r(array_keys($frontab));
?>
