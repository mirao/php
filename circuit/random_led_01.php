<?php
/** 
 * Record number of tries when LED is randomly on/off
 * See https://maly.gitbooks.io/hradla-volty-jednocipy/19_panna,_nebo_orel/
 */

system('stty cbreak -echo');
$stdin = fopen('php://stdin', 'r');
echo "Press 0 or 1 after each LED result. Abort by Ctrl+C\n";
echo "One\t%One\tZero\t%Zero\tTotal\n";
$total = 0;
$one = 0;
$zero = 0;
while (1) {
    $response = fgetc($stdin);
    $total++;
    if ($response == '1') {
        $one++;
    } else {
        $zero++;
    }
    $onepct = round($one / $total * 100);
    $zeropct = round($zero / $total * 100);
    echo "$one\t$onepct%\t$zero\t$zeropct%\t$total\n";
}