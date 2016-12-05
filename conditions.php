<?php
$pristup_odepren = TRUE;
if ($pristup_odepren)
    echo "Na tuto stránku se nemůžete dostat bez autorizace<BR>";

$pristup_odepren = FALSE;
if ($pristup_odepren)
    echo "Na tuto stránku se nemůžete dostat bez autorizace<BR>";
else
    echo "Access allowed!<BR>";

$pristup_odepren = FALSE;
if ($pristup_odepren)
    {
    echo "Na tuto stránku se nemůžete dostat bez autorizace <BR>";
    echo "Vaše IP adresa byla zaznamenána do protokolu.";
    }
else
  {
    echo "Vítejte na této stránce<BR>";
    echo ++$pocetnavstev."<BR>";
  }

$browser="Explorer";
if ($browser=="Mozilla")
    echo "Výborně !!!";
elseif ($browser=="Konqueror")
    echo "Dobře .";
elseif ($browser=="Explorer")
    echo ";-(";
else 
    echo "Nepodařilo se zjistit Váš browser";

//příklad první
$pristup_odepren = TRUE;
if ($pristup_odepren):
    echo "Na tuto stránku se nemůžete dostat bez autorizace";
endif;
//příklad druhý
if ($pristup_odepren):
  echo "Na tuto stránku se nemůžete dostat bez autorizace <BR>";
  echo "Vaše IP adresa byla zaznamenána do protokolu.";
else:
  echo "Vítejte na této stránce<BR>";
  echo $pocetnavstev++;
endif;
// příklad třetí
if ($browser=="Mozilla"):
    echo "Výborně !!!";
elseif ($browser=="Konqueror"):
    echo "Dobře .";
elseif ($browser=="Explorer"):
    echo ";-(";
else:
    echo "Nepodařilo se zjistit Váš browser";
endif;

if (TRUE):
    echo "Ahoj";
    echo "Nazdar";
endif;

echo "-----\n";
switch ($browser):
  case "Mozilla":
    echo "Výborně !!!";
    break;
  case "Konqueror":
    echo "Dobře .";
    break;
  case "Explorer":
    ?>
    ;-(
        <table style=\"width:100%\">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th> 
            <th>Age</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td> 
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td> 
            <td>94</td>
        </tr>
        </table>
    <?php
    break;
  default:
    echo "Nepodařilo se zjistit Váš browser";
endswitch;
echo "\n";
?>