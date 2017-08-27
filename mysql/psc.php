<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php

require_once 'Db.php';

$BudemeZobrazovat=true;
if (!empty($_POST)) { // tak už se odesílalo a musíme kontolovat
    if (strlen($_POST["psc"])<>5 || !is_numeric($_POST["psc"])) {
          // kontrolou jsme neprošli
        echo "PSČ musí být pětimístné číslo";
    } else {
          // kontolou jsme prošli
        $BudemeZobrazovat=false;
        try {
            $dbh = new Db; // Connect to DB

            // Records were loaded to table by SQL command:
            // LOAD DATA local INFILE '/home/mira/workspace/php/mysql/psc.csv' INTO TABLE psc FIELDS TERMINATED BY ';' ignore 1 lines;
            $sth = $dbh->query("select * from psc where psc=".$_POST["psc"]);
            $radku = $dbh->last_row_count();
            if ($radku==0) {
                echo "PSČ ".$_POST["psc"]." nemá, bohužel, žádná obec";
            } else {
                echo "PSČ ".$_POST["psc"]." má následujících $radku obcí:<BR>";
                foreach ($sth as $row) {
                    echo $row["nazcobce"]."<BR>\n";
                }
            };
        } catch (PDOException $e) {
            var_dump("Error: " . $e->getMessage());
            die();
        }
    }
}

if ($BudemeZobrazovat) {?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    PSČ: <input name="psc" value="<?php echo $_POST["psc"]?>">
      <input type="Submit" name="odesli">
  </form>
<?php
}
