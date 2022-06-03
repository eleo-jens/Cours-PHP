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
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];

        if ($prenom == 'Eleonore' AND $nom == 'Jens'){
            echo "<h1>Que la force soit avec toi! </h1>";
            echo '<a href="https://www.starwars.com/">Clique ici</a>';
        }
        else {
            echo "<h1>Bienvenue</h1>";
        }
    ?>
</body>
</html>