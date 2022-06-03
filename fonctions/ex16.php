<?php
    declare(strict_types=1);
?>

<!-- Créez une fonction qui reçoit un array associatif et affiche son contenu dans un tableau HTML. 
Le texte sera affiché dans la couleur qu'on envoie en paramètre à la fonction -->

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
        function print_tab(array $tableau, string $color): void
        {
            print ("<table border='3'>");
            foreach ($tableau as $key => $value){
                print ("<tr>");
                print ("<td><h4 style='color:" .$color.  "'>" .$key. "</h4></td>");
                print ("<td><h4 style='color:" .$color.  "'>" .$value. "</h4></td>");
                print ("<?/tr>");
            }
            print ("</table>");
        }
        
        $tab = ['nom' => 'Eleo', 
                'age' => '28',
                'pays' => 'Belgique'];
        print_tab($tab, 'green');
    ?>
</body>
</html>