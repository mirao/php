<?php 
function Prikazy()
{
  $prikazy=Array("echo", "print", "date", "print_r", "sort");
  sort ($prikazy);
  echo "<SELECT name=\"prikaz\">";
  foreach ($prikazy as $prikaz) echo "\t<OPTION VALUE=".str_replace("_","-",$prikaz).">".$prikaz."</OPTION>\n";
  echo "</SELECT>";
} 
if (empty ($_POST["odeslat"]))
{
  ?>
  <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  </head>   
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
  Vyber příkaz:&nbsp;
  <?php 
  Prikazy();
  ?>
  <input name="odeslat" value="Odeslat" type="submit">
  </form>
  <?php 
}
else 
{
  Header("Location: http://cz.php.net/manual/en/function.".$_POST["prikaz"].".php");
}
?>