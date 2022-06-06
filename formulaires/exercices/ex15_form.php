<!-- Créez un formulaire contenant un prix. La page doit contenir deux radio buttons "Envoyer à domicile" ou "Retirer sur place". Rajoutez un bouton "Envoyer" qui nous permettra d'envoyer les données du formulaire et afficher le prix. Si le client demande l'envoi à domicile le prix sera augmenté de 5 euros -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./ex15_traitement.php" method="POST">
        <label for="price">Prix:</label>
        <input type="number" name="price" id="price"> <br>
        <input name="envoi" type="radio" id="domicile" value="domicile">
        <label for="domicile">Envoyer a domicile</label> <br>
        <input name="envoi" type="radio" id="place" value="place">    
        <label for="place">Retirer sur place</label> <br>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>