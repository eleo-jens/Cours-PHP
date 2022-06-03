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
        //$_POST : contient toutes les données du formulaire qui a appelé cette page
        // variable de type array associatif qui est crée par le serveur
        print ($_POST['nom']);
        print ("<br>");
        print ($_POST['age']);
        print ("<br>");
        print_r ($_POST);

        $nom = $_POST['nom']; //on devrait filtrer d'abord pour verifier par exemple qu'il n'y ait pas de script javascript
        $age = $_POST['age'];

        if ($age >= 18){
            echo "<h1>Bienvenue</h1>";
        }
        else {
            echo "<h1>Vous ne pouvez pas continuer</h1>";
        }
    ?>
</body>
</html>