<!-- Créez un script contenant un formulaire où on saisit deux valeurs entières. 
Un autre script traitera les données envoyées et affichera toutes les valeurs 
entières qui existent entre les deux dans un tableau HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./ex4_traitement.php" method="POST">
        Entrez une premiere valeure entiere: <input type="number" name="n1"> <br>
        Entrez une deuxieme valeure entiere: <input type="number" name="n2"> <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>