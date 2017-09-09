<?php
require "auth.php";
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
$server="mysql.linuxsoft.cz";
$user="Petr Zajíc";
$password="heslo";
echo "Při přihlášení se musí použít server <B>$server</B>,
uživatel <B>$user</B> a heslo <B>$password</B>.";
echo "<p><a href=\"second_page.php\">Odkaz na další stránku</a>";