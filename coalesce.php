<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example-coalesce-function- php mysql examples | w3resource</title>
<meta name="description" content="example-coalesce-function- php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>A list of the publishers with either their date of establishment or country or city:</h2>
<table class='table table-bordered'>
<tr>
<th>Publishers</th><th>date of establishment or country or city</th>
</tr>
<?php
$hostname="localhost";
$username="mira";
$password="a";
$db = "test";
$dateorloc = "COALESCE(estd,country,pub_city)";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query("SELECT pub_NAME,$dateorloc
FROM newpublisher") as $row) {
echo "<tr>";
echo "<td>" . $row['pub_NAME'] . "</td>";
echo "<td>" . $row[$dateorloc] . "</td>";
echo "</tr>";
}
?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>