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
        //3. Créer une fonction qui renvoie une valeur * 2 et stocker là dans une variable
        $doubler = function (float $nb): float {
            return $nb * 2;
        };

        $result = $doubler(5);
        echo $result;

        // 4. Utilisez array_map sur cet array
        // pour obtenir un nouvel array où les éléments seront multipliés par 2
        $array = [12, 456, 454, 789, 1, 0, 0.36, 12.58];

        $resultArray = array_map($doubler, $array);
        foreach ($resultArray as $val){
            echo $val. "</br>";
        }
    ?>
</body>
</html>