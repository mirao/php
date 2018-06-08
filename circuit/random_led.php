<?php
/** 
 * Record number created by LED(s)
 * See:
 * https://maly.gitbooks.io/hradla-volty-jednocipy/19_panna,_nebo_orel/
 * https://maly.gitbooks.io/hradla-volty-jednocipy/20_citace/203_hraci_kostka.html
 * Sample usage
 * ------------
 * php random_led.php # Numbers 0, 1
 * php random_led.php 6 # Numbers 0, 1, 2, 3, 4, 5
 */

/**
 * Print header with number columns
 * @param int $numCnt Count of numbers
 */ 
function printHeader(int $numCnt)
{
    echo "Press number 0 - " . ($numCnt - 1) . " after each LED result. Abort by Ctrl+C\n";
    for ($i = 0; $i < $numCnt; $i++) {
        echo "$i\t";
    }
    echo "\n";
}

/**
 * Print current stats after each try
 * @param array $tries Tries
 * @param int $totalTriesnumCnt Total tries count
 * @param int $numCnt Count of numbers
 */ 
function printStats(array $tries, $totalTriesnumCnt, $numCnt)
{
    for ($i = 0; $i < $numCnt; $i++) {
        echo round($tries[$i] / $totalTriesnumCnt * 100) . "%\t";
    }
    echo "\n";
}

system('stty cbreak -echo');
$stdin = fopen('php://stdin', 'r');
$totalTriesnumCnt = 0;
$tries = [];
$numCnt = isset($argv[1]) ? $argv[1] : 2;
for ($i = 0; $i < $numCnt; $i++) {
    $tries[$i] = 0;
}

printHeader($numCnt);
while (1) {
    $response = fgetc($stdin);
    if ($response >= 0 && $response < $numCnt) {
        $totalTriesnumCnt++;
        $tries[$response]++;
        printStats($tries, $totalTriesnumCnt, $numCnt);
    }
}