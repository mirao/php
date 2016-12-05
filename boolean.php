<?php
$pravda =true;
echo "Logický nesmysl ".(true && false)."<BR>\n";
echo "Logický nesmysl ".(false && true)."<BR>\n";
echo "Logický nesmysl ".(false && false)."<BR>\n";
echo "Logický nesmysl ".(true && true)."<BR>\n";
echo "Logický nesmysl ".(true + false)."<BR>\n";
echo "Logický nesmysl ".(false + true)."<BR>\n";
echo "Logický nesmysl ".(false + false)."<BR>\n";
echo "Logický nesmysl ".(true + true)."<BR>\n";

$mobil=false;
$vysilacka=true;
$volat=$mobil or $vysilacka;
echo "Mobil ".($mobil?"mám":"nemám")." a vysílačku ".($vysilacka?"mám":"nemám");
echo " volat ".($volat?"můžu":"nemůžu")."<br>\n";
$volat=$mobil || $vysilacka;
echo "Mobil ".($mobil?"mám":"nemám")." a vysílačku ".($vysilacka?"mám":"nemám");
echo " volat ".($volat?"můžu":"nemůžu")."\n<p>\n";
?>