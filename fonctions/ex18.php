<?php
    declare(strict_types=1);
?>

<!-- Créez une fonction qui reçoit un array de noms et modifie son contenu 
en mettant tous les noms en majuscule (paramètre par référence). 
Affichez l'array original modifié dans le script principal -->

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
    function maj_tab(&$tab): void
    {
        for ($i = 0; $i < count($tab); $i++){
            $tab[$i] = strtoupper($tab[$i]);
       }
    }

    $tab = ['hello', 'comment', 'ca', 'va', '?'];
    maj_tab($tab);
    print "<table border='3'>";
    print "<tr>";
    foreach ($tab as $nom){
        print "<td>". $nom. "</td>";
    }
    print "</tr>";
    print "</table>";
    ?>
</body>
</html>