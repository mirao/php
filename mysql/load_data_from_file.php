<?php

require_once 'Db.php';

function ungzip ($name)
{
  $fp = gzopen ($name.".gz", "rb");
  $contents = gzread ($fp, 4000);
  $fp = fopen ($name,"wb");
  fwrite ($fp,$contents);
  fclose ($fp);
}

if ($_REQUEST["odeslano"]==1):
  if ($_FILES['data']['size']>4000) die ("Soubor je příliš velký ;-(");
  if (!is_file($_FILES['data']['tmp_name'])) die ("Žádný soubor jste neuploadovali !!!");
  if (move_uploaded_file($_FILES['data']['tmp_name'], "./pracovnici.txt.gz"))
  {
    ungzip("pracovnici.txt");
    $dbh = new Db; // Connect to DB
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
        
    $soubor=dirname(__FILE__)."/pracovnici.txt";
    $dbh->query("LOAD DATA LOCAL INFILE '".$soubor."' INTO TABLE `pracovnici` (prijmeni, zamestnanod, zamestnando, vek)");    
  };
else:
?>
    Nahrání souboru na server
    <form method="POST" ENCTYPE="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>">
    <table border="1" >
      <tr>
        <td>Textový soubor</td>
        <td>
          <input type="HIDDEN" name="MAX_FILE_SIZE" VALUE=4000>
          <input type="file" name="data" ACCEPT="text/*">
        </td>
        <td>(max. 4 kb)</td>
      </tr>
      <tr>
        <td colspan="3">
          <input type="hidden" name="odeslano" value="1">
          <p align="center"><input type="submit" value="Odeslat">
        </td>
      </tr>
    </table>
    </form>
<?php
endif;
