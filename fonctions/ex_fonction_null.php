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
        // exemple pour comprendre les paramètres nullables 
        // ce tableau vient d'une base de données
        $nom = ['Maya', 'Eleo', 'Bao'];
        //$nom= null;

        // return: true si l'array n'est pas null: quand on ne s'attend pas à ce que ca soit null
        function afficherTab(?array $nom): bool
        {
            if ($nom != null) {
                foreach ($nom as $value) {
                    echo "\n". $value;
                }
                return true;
            }
            else {
                return false;
                //echo "<br> Il n'y a pas de résultats";
            }
        }

        afficherTab($nom);
    ?>
</body>
</html>