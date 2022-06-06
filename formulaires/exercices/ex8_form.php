<!-- Créez un formulaire qui nous permette d'introduire un prix et de calculer le prix TVAC. 
La TVA est choisie par l'utilisateur parmi les valeurs d'une liste déroulante. 
Forcez (HTML) l'utilisateur à saisir une valeur numérique. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex8_traitement.php" method="POST">
        <h2>Calculateur de TVA</h2>
        Prix hors TVA:
        <input type="number" name="price" min="0" oninput="validity.valid||(value='')"> <br>
        <select name="tva">
            <option value="1.21">21 %</option>
            <option value="1.21">12 %</option>
            <option value="1.06">6 %</option>
        </select> <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>