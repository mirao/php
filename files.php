<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if (readfile("files.html") == false) {
            ?> <pre> <?php
            print_r(error_get_last());
            ?>
            </pre> <?php
            var_dump(error_get_last());
        }
    ?>
</body>
</html>
