<?php
/** 
 * Record numbers created by random LED states
 * See:
 * https://maly.gitbooks.io/hradla-volty-jednocipy/19_panna,_nebo_orel/
 * https://maly.gitbooks.io/hradla-volty-jednocipy/20_citace/203_hraci_kostka.html
 * 
 * Sample usage
 * ------------
 * php random_led.php # States 0, 1
 * php random_led.php 6 # States 0, 1, 2, 3, 4, 5
 * php random_led.php 6 1 # Cube mode, states 1, 2, 3, 4, 5, 6
 */

/**
 * Print header with number columns
 * @param int $stateCnt Count of LED states
 * @param int $startNum Start number
 */ 
function printHeader(int $stateCnt, int $startNum)
{
    echo "Press number $startNum - " . ($startNum + $stateCnt - 1) . " after every LED result. Abort by Ctrl+C" . PHP_EOL;
    for ($i = $startNum; $i < $stateCnt + $startNum; $i++) {
        echo "$i\t";
    }
    echo PHP_EOL;
}

/**
 * Print current stats after each try
 * @param array $tries Tries
 * @param int $totalTriesCnt Total tries count
 */
function printStats(array $tries, $totalTriesCnt)
{
    foreach ($tries as $tryCnt) {
        echo round($tryCnt / $totalTriesCnt * 100) . "%\t";
    }
    echo PHP_EOL;
}

system('stty cbreak -echo');
$stdin = fopen('php://stdin', 'r');
$totalTriesCnt = 0;
$tries = [];
$stateCnt = $argv[1] ?? 2; // Default value is "2 states" - on/off
$startNum = $argv[2] ?? 0; // Default start number is 0
for ($i = $startNum; $i < $startNum + $stateCnt; $i++) {
    $tries[$i] = 0;
}

printHeader($stateCnt, $startNum);
while (1) {
    $response = fgetc($stdin);
    if ($response >= "$startNum" && $response < (string) ($startNum + $stateCnt)) {
        $totalTriesCnt++;
        $tries[$response]++;
        printStats($tries, $totalTriesCnt, $stateCnt);
    }
}