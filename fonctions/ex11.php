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
        function VAT(float $price): void {
            print ("<h4>Le prix avec la TVA: " .$price * 1.21. "</h4>");
        }
        
        $prices = [12, 20, 30, 5];
        
        foreach ($prices as $price){
            VAT($price);
        }
        
    ?>
</body>
</html>