<?php 
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php
    // 1. Créez une fonction qui affiche bonjour (reçoit un nom). Mettez-la dans une variable 
    // et faites appel à cette fonction

    $bonjour = function (string $nom = null) : void {
        echo "<h1>Bonjour " .$nom . " !</h1>";
    };

    $bonjour("Eléonore");
    $bonjour();

    // 2. Nous avons un array de messages.
    // nous voulons utiliser la fonction bonjour pour afficher tous les messages
    $arr = ["nous sommes en cours", "on a faim", "ça serait bien de finir la pause"];
    
    array_map($bonjour, $arr);
    ?>


    <script type="text/javascript">
        const bonjour = function (nom){
            console.log(`Bonjour ` + nom);
        };
        bonjour("Ele");
    </script>



</body>
</html>
