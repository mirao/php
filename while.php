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