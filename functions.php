<?php
function hlavicka()
{
  ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"; "http://www.w3.org/TR/html4/loose.dtd">
    <html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-2">
    <title>Moje první stránka</title>
    </head>
  <?php
}

function printText($text, $cnt) {
    for ($i = 1; $i <= $cnt; $i++)
        echo $text . "<BR>\n";
}

// použití
hlavicka();
echo "<BODY>";
printText("Tělo stránky", 1);
printText("Hello page", 5);
printText(dvaplusdva(), 3);
echo "</BODY></HTML>";
?>

<?php
function dvaplusdva()
{
  echo "Printing" . "<BR>";
  return 2+2;
  echo "No printing";
}
?>

<?php
function JeNedele($den)
{
  return (date("w", strtotime($den))==0);
}
$day = "2016-12-10";
echo $day . (JeNedele($day) ? " je neděle" : " není neděle");
echo "<BR>";
?>

<?php
function Hlaska (&$hlaska, &$names)
{
  global $VracetUpovidaneHlasky; // otherwise function doesn't know about the variable
  static $nochange = "Jedna"; // remember value when function exits
  echo $nochange, "<BR>";
  if ($VracetUpovidaneHlasky)
    echo "Já jsem velmi upovídaná hláška.";
  else
    echo "Hláška";
  echo "<BR>";  
  $hlaska = "Nekoukej";
  $nochange = "Dva";
  array_push($names, "Franta");
}
$hl = "Jo";
$VracetUpovidaneHlasky = TRUE;
$names = ["Mira", "Alfons"];
Hlaska($hl, $names);
Hlaska($hl, $names);

echo $hl, "<BR>";
print_r($names);
?>