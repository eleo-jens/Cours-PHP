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
        function tot_price(array $tableau){
            $total = 0;
            foreach ($tableau as $value){
                $total += $value;
            }
            return $total;
        }
        $tab = ['laptop' => 823,
                'clavier' => 35,
                'ecran' => 100];
        print ("<h2>Total du panier: " .tot_price($tab). "</h2>");
    ?>
</body>
</html>