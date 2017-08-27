<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
    tbody tr:nth-child(even) {
        background: #F5F5F5;
    }
    
    th:first-child {
        width: 230px;
    }

    tr {
        text-align: left;
    }
</style>
</head>

<?php

require_once '../Db.php';

define ("ROWS", 10);
try {
    $dbh = new Db; // Connect to DB
    if (!isset($_GET["celkem"])) { //pokud nevíme, kolik bude záznamů tak to zjistíme...
        $vysledek = $dbh->query("select count(*) as pocet from kniha_hostu");
        $celkem=$vysledek->fetchColumn();
    } else {
        $celkem=$_GET["celkem"];
    }
    if ($celkem < ROWS) {
        $vysledek = $dbh->query("select * from kniha_hostu order by cas desc");
    } else {
        if (!isset($_GET["od"])) {
            $od=1;
        } else {
            $od=$_GET["od"];
        }
        $vysledek = $dbh->query("select cas, vzkaz from kniha_hostu order by cas desc"." limit ".($od-1).", ".ROWS);
        echo "Záznamů: ".$od."-";
        echo (($od+ROWS-1)<=$celkem)?($od+ROWS-1):$celkem;
        echo " z celkem $celkem&nbsp;&nbsp;&nbsp;";
        //začátek - vytvoř odkaz pouze pokud nejsme na začátku
        if ($od==1) {
            echo "Začátek&nbsp;|&nbsp;";
        } else {
            echo "<a href=\"".$_SERVER["PHP_SELF"]."?celkem=$celkem&amp;od=1\">Začátek</a>&nbsp;|&nbsp;";
        }
        //zpět - vytvoř odkaz pouze pokud nejsme v prvních ROWS
        if ($od<ROWS) {
            echo "Předchozí&nbsp;|&nbsp;";
        } else {
            echo "<a href=\"".$_SERVER["PHP_SELF"]."?celkem=$celkem&amp;od=".($od-ROWS)."\">Předchozí</a>&nbsp;|&nbsp;";
        }
        //další - vytvoř, pouze pokud nejsme v posledních ROWS
        if ($od+ROWS>$celkem) {
            echo "Následující&nbsp;|&nbsp;";
        } else {
            echo "<a href=\"".$_SERVER["PHP_SELF"]."?celkem=$celkem&amp;od=".($od+ROWS)."\">Následující</a>&nbsp;|&nbsp;";
        }
        //poslední - to je posledních (zbytek po dělení ROWS) záznamů
        if ($od>$celkem-ROWS) {
            echo "Konec&nbsp;<BR>";
        } else {
            $konecnylimit = $celkem%ROWS==0 ? $celkem-ROWS+1 : $celkem-$celkem%ROWS+1;
            echo "<a href=\"".$_SERVER["PHP_SELF"]."?celkem=$celkem&amp;od=".$konecnylimit."\">Konec</a><BR>";
        }
    }
    echo "<B>Pokud jste vkládali HTML kód, je při zobrazení ignorován.</B><BR>\n";
    foreach ($vysledek as $zaznam) { 
      echo "<p>".date("j.n.Y G:i:s", ($zaznam["cas"]))."<BR>\n";
      echo strip_tags($zaznam["vzkaz"])."</p>\n";
    }
} catch (PDOException $e) {
    echo("Error: " . $e->getMessage());
}
