<?php
ob_start();
$files = scandir("./blog");
$licha = true;
foreach($files as $soubor) {
    if ($soubor == "." || $soubor == "..") {
        continue;
    }
    $barva  =  $licha ? "#FDF5E6" : "#FFFFFF"; // nebo
    echo "<div style=\"background-color:$barva\">";
    $content = str_replace("\n", "<BR>", file_get_contents("./blog/".$soubor));
    echo $content;
    $datum = explode(".", $soubor);
    echo "<p style=\"text-align:right\">".date("d.m.Y", strtotime($datum[0]))."</p>";
    echo "<hr></div>";
    $licha = !$licha;
}

$contents = ob_get_contents();
ob_end_clean();
header("Content-Description: File Transfer"); 
header("Content-Type: application/force-download"); 
header("Content-Disposition: attachment; filename=\"blog.html.gz\""); 
echo gzencode($contents);
