<?php
$file = fopen("integers.txt", "c+");
// Read packed integer value
$val = unpack('i', fread($file, 4))[1];
echo $val, PHP_EOL;
rewind($file);
// Write increased integer value
fwrite($file, pack('i', $val + 1));
fclose($file);