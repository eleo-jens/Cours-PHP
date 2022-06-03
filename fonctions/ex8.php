<?php
    declare(script_types=1);
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
        function VAT(float $price) {
            return $price * 1.21;
        }
        $price = 12.5;
        print (VAT($price));
    ?>
</body>
</html>