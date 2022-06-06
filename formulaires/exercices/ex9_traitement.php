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
        $price[] = 65;
        $price[] = 79;
        $price[] = 85;
        $price[] = 99;
        $price[] = 199;
        // est-ce que ca vaut la peine de rapatrier les infos quand le nombre de chambre est zero ?
        $n[] = $_POST['n1'];
        $n[] = $_POST['n2'];
        $n[] = $_POST['n3'];
        $n[] = $_POST['n4'];
        $n[] = $_POST['n5'];

        $total_price = 0;
        $total_n = 0;
        foreach ($n as $key => $nombre){
            if ($nombre != 0){
                $total_price = $total_price + $nombre *$price[$key];
                $total_n = $total_n + $nombre;
            }
        }
        print "<h2> Le total de votre reservation pour $total_n chambre(s) est de: $total_price euros.</h2>";
    ?>
</body>
</html>