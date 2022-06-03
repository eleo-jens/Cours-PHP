<?php
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function faire_titre(string $title, string $color): void
        {
            print("<h1 style = 'color:" .$color. "'>" .$title. "</h1>");
        }
        $title = $_POST['title'];
        $color = $_POST['color'];
        faire_titre($title, $color);
    ?>
</body>
</html>