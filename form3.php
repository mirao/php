<?php 
  if (!isset($_REQUEST['alreadysent'])) 
  {
?> 
<form method="get" action="form3.php"> 
  Příjmení: <input name="prijmeni">
    <input type="hidden" name="alreadysent" value="1"> 
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