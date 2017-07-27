<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>Test</title>
</head>
<?php  
error_reporting(E_ALL);
if ($_REQUEST["odeslano"]==1):
  unlink ("./31/hloupost.txt");
  if ($_FILES['hloupost']['size']>300) die ("Soubor je příliš velký ;-(");
  if (!is_file($_FILES['hloupost']['tmp_name'])) die ("Žádný soubor jste neuploadovali !!!");
  if (move_uploaded_file($_FILES['hloupost']['tmp_name'], "./31/hloupost.txt"))
  {
    echo "Soubor <B>".$_FILES['hloupost']['name']."</B> z Vašeho PC";
    echo " typu <B>".$_FILES['hloupost']['type']."</B>";
    echo " o velikosti <B>".$_FILES['hloupost']['size']."</B> bajtů";
    echo " byl na serveru uložen pod dočasným názvem <B>".$_FILES['hloupost']['tmp_name']."</B>";
    echo " a následně zpracován. Obsah souboru je:<P><pre>";
    readfile ("./31/hloupost.txt");
    echo "</pre>";
  };
else:
?>
    Nahrání souboru na server
    <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>"> 
    <table border="1" >
      <tr>
        <td>Textový soubor</td>
        <td>
        <input type="HIDDEN" name="MAX_FILE_SIZE" VALUE=300>
        <input type="file" name="hloupost" ACCEPT="text/*">
        </td>
        <td>(max. 300 bajtů)</td>
      </tr>
      <tr>
        <td colspan="3">
              <input type="hidden" name="odeslano" value="1">
          <p align="center"><input type="submit" value="Odeslat"></td>
      </tr>
    </table>
    </form>
<?php 
endif;
?>
