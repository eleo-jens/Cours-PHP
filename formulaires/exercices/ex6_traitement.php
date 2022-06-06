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
        $price = $_POST['price'];
        $tva = $price * 1.21;
        print "<h2>Avec la TVA: </h2>";
        print "<h4>". $tva. "</h4>";
    ?>
</body>
</html>