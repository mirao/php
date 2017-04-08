<?php
echo preg_match('/Petr/', "Petr je borec") . PHP_EOL;
echo preg_match('/Petr/', "Je doma Petr?") . PHP_EOL;
echo preg_match('/Petr/', "Honza, Petr a Pavel") . PHP_EOL;
echo preg_match('/Petr/', "Franta je taky borec") . PHP_EOL;

function JeCeleCislo ($cislo)
{
    return preg_match('/^[\+\-]?[\d]+$/', $cislo);
}
echo JeCeleCislo ("+1") . PHP_EOL;
echo JeCeleCislo ("-6") . PHP_EOL;
echo JeCeleCislo ("3.5") . PHP_EOL;
echo JeCeleCislo ("4 kusy") . PHP_EOL;

function JeEmail ($cislo)
{
    return preg_match("/^[^@]+@[^@]+\.[^@]+$/",$cislo);
}
echo JeEmail ("nekdo@neco.cz") . PHP_EOL;
echo JeEmail ("nekdo@@neco.cz") . PHP_EOL;
echo JeEmail ("nekdoneco.cz") . PHP_EOL;
echo JeEmail ("@neco.cz") . PHP_EOL;
echo JeEmail ("neco.cz") . PHP_EOL;
echo JeEmail ("nekdo@necocz") . PHP_EOL;
echo JeEmail ("nekdo@neco.") . PHP_EOL;

$retezec= "Mám   řetězec   se      zbytečně  mnoho mezerami,   že    ????";
echo $retezec . PHP_EOL;
echo preg_replace("/[[:blank:]]+/", " ", $retezec) . PHP_EOL;
echo preg_replace("/(z)(e)/", "$2$1", $retezec) . PHP_EOL; // exchange chars in pairS
