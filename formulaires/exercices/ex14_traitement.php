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
        $reduction = $_POST['reduction'];
        $sale = 0.90;

        if ($reduction == "true"){
            print "<h2>Total: " .$price * $sale. "</h2>"; 
        }
        else {
            print "<h2>Total: $price</h2>";
        }
    ?>
</body>
</html>