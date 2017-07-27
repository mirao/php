<?php
$ftp = fopen("http://ftp.debian.org/debian/README.html", "r");
// echo fread($ftp, 10*1024);
while (false !== ($line = fgets($ftp)))
    echo $line;
fclose($ftp);