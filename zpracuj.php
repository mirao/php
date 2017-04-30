<?php
    echo "Právě mi přišel formulář. Uživatel tam jistě zadal nějaké příjmení!<BR>\n"; 
    echo "Á, je to <B>".$_REQUEST["prijmeni"]."</B><BR>";
    foreach ($_REQUEST as $key => $value) 
    { 
        echo "$key => $value<BR>"; 
    }  
?>
