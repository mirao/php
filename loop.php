<style>
table, th, td {
    text-align: left;
    border-collapse: collapse;
    border: 1px solid black;
}
hr {
    margin-left: 0;
    width: 10%;
}
</style>

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

<hr>

<TABLE>
<TR><TD>Číslo</TD><TD>Druhá mocnina</TD></TR>
<?php
$i=1;
while ($i<=10):
    echo "<TR><TD>".$i."</TD><TD>".$i*$i."</TD></TR>" . PHP_EOL;
    $i++;
endwhile;
?>
</TABLE>
<hr>

<TABLE>
<TR><TD>Číslo</TD><TD>Třetí mocnina</TD></TR>
<?php
$i=0;
do
{
    $i++;
    echo "<TR><TD>".$i."</TD><TD>".pow($i, 3)."</TD></TR>\n";
} while ($i<10);
?>
</TABLE>