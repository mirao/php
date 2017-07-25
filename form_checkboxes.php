<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
  $BudemeZobrazovat=true;
if (!empty($_POST)) {
    if (empty($_POST["chkPHP"]) || empty($_POST["chkDistribuce"]) || empty($_POST["chkClanky"])) {
        echo "Špatně! Musí se Vám líbit všechno !!!";
    } else {
        $BudemeZobrazovat=false;
        if ($_POST["chkPHP"]) {
            echo "Vám se líbí náš seriál o PHP !!!<BR>\n";
        }
        if ($_POST["chkDistribuce"]) {
            echo "Vám se líbí naše sekce distribucí !!!<BR>\n";
        }
        if ($_POST["chkClanky"]) {
            echo "Vám se líbí naše články !!!<BR>\n";
        }
    }
}
if ($BudemeZobrazovat) :?>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
  <p><input type="checkbox" name="chkPHP" value="PHP" 
    <?php echo empty($_POST["chkPHP"])? "":"CHECKED"?>
  >
  Líbí se mi seriál o PHP.</p>
  <p><input type="checkbox" name="chkDistribuce" value="distribuce"
    <?php echo empty($_POST["chkDistribuce"])? "":"CHECKED"?>
  >
  Líbí se mi sekce distribucí.</p>
  <p><input type="checkbox" name="chkClanky" value="články"
    <?php echo empty($_POST["chkClanky"])? "":"CHECKED"?>
  >
  Líbí se mi sekce článků</p>
  <p><input type="submit" value="Odeslat" name="odeslano"></p>
</form>
<?php endif;?>
