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
    // 5. On veut faire un jeu de lotto. Nous avons besoin de générer les valeurs
    // gagnants dans un tableau. Créez une fonction capable de générer un tableau 
    // d'un certain nombre de valeurs entre 0 et 20 (le nombre de valeurs sera envoyée en paramètre)

    function generateTableau(int $min, int $max){
        return function (int $nb) use ($min, $max){
            $array = [];
            for ($i = 0; $i < $nb; $i++){
                $array[$i] = mt_rand($min, $max);
            }
            return $array;
        };
    }

    $createTableau = generateTableau(1,50);
    $array = $createTableau (5);
    echo "<h1>Tableau 1</h1>";
    foreach ($array as $val){
        echo $val. "<br>";
    }

    $array2 = $createTableau (1,100);
    echo "<h1>Tableau 2</h1>";
    foreach ($array2 as $val){
        echo $val. "<br>";
    }
    ?>
</body>
</html>