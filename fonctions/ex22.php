<?php
    declare(strict_types=1);
?>

<!-- 
Nous voulons programmer un jeu de cartes en PHP et on doit stocker les noms des cartes dans un array. 
Trouvez la manière la plus efficace de le faire.
Utilisez la fonction array_rand pour vous aider à prendre une carte au hasard. -->

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
        function create_card_game(): array
        {
            $type = ['coeur','as','pique','carreau'];
            $set = ['as','1', '2', '3','4','5','6','7','8','9','10','valet','reine','roi'];
            $game = [];
            foreach ($type as $value){
                foreach ($set as $card){
                    $game[] = $card. " de " .$value; 
                }
            }
            return $game;
        }
        
        $tab = create_card_game();
        $card = array_rand($tab);
        print "<h2>Votre carte: " .$tab[$card]. "</h2>";
    ?>
</body>
</html>