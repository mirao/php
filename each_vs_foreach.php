<?php
function getDiff($start, $end) {
    $s = explode(' ', $start);
    $stot = $s[1] + $s[0];
    $e = explode(' ', $end);
    $etot = $e[1] + $e[0];
    return $etot - $stot;
}

$lim=10000000;
$arr = array();
for ($i=0; $i<$lim; $i++) {
    $arr[$i] = $i/2;
}

$start = microtime();
foreach ($arr as $key=>$val);

$end = microtime();
echo "time for foreach = " . getDiff($start, $end) . ".\n";

reset($arr);
$start = microtime();
while (list($key, $val) = each($arr));
$end = microtime();
echo "time list each = " . getDiff($start, $end) . ".\n";
