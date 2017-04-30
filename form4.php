<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'GET') 
  {
?> 
<form method="post" action="form4.php"> 
  Příjmení: <input name="prijmeni">
    <input type="Submit" name="odesli"> 
</form> 
<?php
    ob_flush();
    flush();
  } 
  else 
  { 
    echo "Mám tě, odeslaný formuláři! Tys vyplnil ".$_REQUEST["prijmeni"]; 
    ob_flush();
    flush();
  } 
?> 