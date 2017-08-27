<?php
  $BudemeZobrazovat=true;
  if ($_POST["odeslano"]) 
  {
    if (strlen($_POST["vzkaz"])==0 || strlen($_POST["vzkaz"])>255)
    {
      echo "Vzkaz by měl mít mezi 1 - 255 znaků";
    }
    else
    {
      $BudemeZobrazovat=false;
      ?>
      <h1>Náhled vzkazu před uložením</h1>
      <div style="background : Silver; display:inline-block; margin-bottom: 10px">
      <?php echo nl2br($_POST["vzkaz"])?>
      </div>
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <input type="hidden" name="vzkaz" value="<?php echo $_POST["vzkaz"]?>">
        <input type="Submit" name="zpet" value="<< Zpět">
      </form>
      <form method="post" action="guest_book_insert.php">
        <input type="hidden" name="vzkaz" value="<?php echo $_POST["vzkaz"]?>">
        <input type="Submit" name="Uložit" value="Uložit >>">
      </form>
      <?php 
    }
  }
if ($BudemeZobrazovat):?>
  <h1>Vložení vzkazu</h1>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    Váš vzkaz:<br><textarea rows="6" name="vzkaz" cols="40"><?php echo $_POST["vzkaz"]?></textarea><br>
    <input type="hidden" name="odeslano" value="true">
    <input type="Submit" name="odeslat" value=">> Náhled">
  </form>
<?php endif;?>