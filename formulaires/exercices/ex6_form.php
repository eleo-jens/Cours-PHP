<!-- Créez un formulaire qui permette de saisir un prix et le rajoute une TVA du 12%. 
L'utilisateur cliquera sur un bouton et le résultat du calcul sera affiché dans une autre page. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./ex6_traitement.php" method="POST">
        <h2>Calculateur de TVA: </h2>
        <input type="number" name="price" min="0" oninput="validity.valid||(value='')">
        <input type="submit" value ="Calculer">
    </form>
</body>
</html>