<?php
    // ce ligne est à mettre en haut du code pour forcer le fortement typé
    declare (strict_types =1);
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
        // SANS RETOUR: mode 2: typé mais pas strict
        function add(int $v1, int $v2): void
        {
            print ("<h2>La somme est: " .$v1 + $v2. "</h2>");
        }
        
        $val1 = "5"; // sous le mode2: ca passe car il y a un casting, par contre "toto" crée un erreur
        $val2 = 10;
        add($val1, $val2);

        // AVEC RETOUR mode 2: typé mais pas strict
        function add_return(int $v1, int $v2): int 
        {
            $v1 = 1.5;// cela ne passe pas car on veut un retour int
            return ("<h2>La somme est: " .$v1 + $v2. "</h2>");
        }
        
        $val1 = "5"; // sous le mode2: ca passe car il y a un casting, par contre "toto" crée un erreur
        $val2 = 10;
        add_return($val1, $val2);
    ?>
</body>
</html>