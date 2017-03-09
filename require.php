<table height="100%" width="100%" border="1">
    <tr>
        <td width=20% valign="center" align="center">
            <?php require  "21_left.php" ?>
        </td>
        <td width=60%>
            <?php include "21_middle.php" ?>
            <?php
                ob_start();
                readfile("https://wordpress.org/plugins/about/readme.txt");
                $out = ob_get_contents();
                ob_end_clean();
                // show the first 9 rows
                $out = implode("<br>", array_slice(explode("\n", $out, 10), 0, 9));
                echo $out;
            ?>
        </td>
        <td width=20% valign="center" align="center">
            <?php include "21_right.php" ?>
            <?php include_once "21_right.php" ?>
        </td>
    </tr>
</table>
