<?php 

    declare(strict_types=1);
?>

<!-- Créez une fonction qui reçoit un array de noms et renvoie un nouvel array 
contenant tous les noms en majuscule (paramètre par valeur). 
Affichez ce nouvel array dans le script principal -->

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
    function maj_array(array $tableau): array 
    {
        for ($i=0; $i < count($tableau); $i++){
            $tableau[$i] = strtoupper($tableau[$i]);
        }
        return $tableau;
    }

    $tab = ['eleo', 'ili', 'nemi'];
    $new = maj_array($tab);
    print "<table border='3'>";
    print "<tr>";
    for ($i=0 ; $i < count($new); $i++){
        print "<td>" .$new[$i]. "</td>";
    }
    print "</tr>";
    print "</table>";

    ?>
</body>
</html>