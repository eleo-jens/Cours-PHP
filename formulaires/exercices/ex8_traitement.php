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
        $tva = $_POST['tva'];
        $price = $_POST['price'];
        $price_tvac = $price * $tva;
        print "<h3>Le prix TVAC: $price_tvac </h3>";
    ?>
</body>
</html>