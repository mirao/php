<?php
// prints SHA256 hashes of all SSN's
for ($a = 0; $a < 1000; $a++) {
    for ($g = 0; $g < 100; $g++) {
        for ($s = 0; $s < 10000; $s++) { 
            $area = str_pad($a, 3, 0, STR_PAD_LEFT); // SSN area part
            $group = str_pad($g, 2, 0, STR_PAD_LEFT); // SSN group part
            $serial = str_pad($s, 4, 0, STR_PAD_LEFT); // SSN serial part
            $ssn = $area . "-" . $group . "-" . $serial;
            echo $ssn . " " . hash('sha256', $ssn), "\n";
        }
    }    
}
