<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php 
  $BudemeZobrazovat=true;
  if (!empty($_POST))
  {
    if (!in_array("licence",$_POST["souhlasim"]))
    {
      echo "Špatně! Musíte minimálně souhlasit s licenčními podmínkami!";
    }
    else
    {
      $BudemeZobrazovat=false;
      echo "Registrace byla provedena<BR>\n";
    }
  }
if ($BudemeZobrazovat):?>
<?php $issouhlasim = isset($_POST["souhlasim"]) && is_array($_POST["souhlasim"]) ?>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
  <p><input type="checkbox" name="souhlasim[]" value="licence" 
  <?php echo ($issouhlasim && in_array("licence", $_POST["souhlasim"])) ? " CHECKED" : ""?>>
  Souhlasím s licenčními podmínkami</p>
  <p><input type="checkbox" name="souhlasim[]" value="spyware" 
  <?php echo ($issouhlasim && in_array("spyware", $_POST["souhlasim"])) ? " CHECKED" : ""?>>
  Nainstalujte mi s produktem nějaký spyware</p>
  <p><input type="checkbox" name="souhlasim[]" value="spywareX" 
  <?php echo ($issouhlasim && in_array("spywareX", $_POST["souhlasim"])) ? " CHECKED" : ""?>>
  Spyware smí restartovat můj počítač</p>
  <p><input type="checkbox" name="souhlasim[]" value="spam" 
  <?php echo ($issouhlasim && in_array("spam", $_POST["souhlasim"])) ? " CHECKED" : ""?>>
  Posílejte mi taky SPAM.</p>
  <p><input type="submit" value="Odeslat" name="odeslano"></p>
</form>
<?php endif;?>
