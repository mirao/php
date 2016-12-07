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
echo "</BODY></HTML>";
?>