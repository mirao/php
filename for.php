<style>
table, th, td {
    text-align: left;
    /*border-collapse: collapse;*/
    /*border: 1px solid black;*/
}
</style>

<TABLE>
<?php
for ($radek=1; $radek<=10; $radek++):
  echo "<TR>";
  for ($sloupec=1; $sloupec<=10; $sloupec++):
    if ($radek * $sloupec < 50) continue;
    echo "<TD>".$radek*$sloupec."</TD>";
  endfor;
  echo "</TR>";
endfor;
?>
</TABLE>

<TABLE>
<?php
for ($radek=1; $radek<=10; $radek++):
  echo "<TR>";
  for ($sloupec=1; $sloupec<=10; $sloupec++):
    echo "<TD style=background-color:". (($radek % 2 == $sloupec % 2) ? "yellow" : "LightGreen") . ">" . $radek*$sloupec."</TD>";
  endfor;
  echo "</TR>";
endfor;
?>
</TABLE>

<TABLE>
<TR><TD>Číslo</TD><TD>Druhá mocnina</TD></TR>
<?php
for ($i=1; $i<=10; $i++) echo "<TR><TD>".$i."</TD><TD>".$i*$i."</TD></TR>";
?>
</TABLE>
<span style="display:block; height: 5;"></span>

<TABLE>
<TR><TD>Číslo</TD><TD>Druhá mocnina</TD></TR>
<?php
for ($i=1; $i<=10; $i++):
  echo "<TR><TD>".$i."</TD>";
  echo "<TD>".$i*$i."</TD></TR>";
endfor;
?>
</TABLE>
<span style="display:block; height: 10;"></span>

<table>
<?php
    $names = [
        "Mira" => "Obr",
        "Franta" => "Kaderabek",
        "Pepa" => "Zdepa",
        "Rudla" => "Řežábek"
    ];
?>
        <tr>
            <th>First</th>
            <th>Last</th>
        </tr>

<?php
    foreach (array_keys($names) as $key)
        echo "<tr><td>$key</td><td>$names[$key]</td></tr>" . PHP_EOL;
?>
</table>