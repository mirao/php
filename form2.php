<?php 
  if (empty ($_REQUEST)) 
  { 
?> 
<form method="get" action="form2.php"> 
  Příjmení: <input name="prijmeni"> 
    <input type="Submit" name="odesli"> 
</form> 
<?php 
  } 
  else 
  { 
  echo "Mám tě, odeslaný formuláři! Tys vyplnil ".$_REQUEST["prijmeni"]; 
  } 
?> 