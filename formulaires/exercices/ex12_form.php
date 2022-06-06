<!-- Créez un formulaire où l'utilisateur peut saisir un prix. 
Le formulaire a aussi une liste déroulante contenant de possibilités de paiement
et un bouton « Payer ». Quand l'utilisateur clique sur le bouton payer on affiche le prix final :
pour Mastercard on rajoute 5 euros au prix et pour VISA 3 euros. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./ex12_traitement.php" method="POST">
        <label>Prix: </label><input type="number" name="price" min="0" oninput="validity.valid||(value='')"><br>
        <label>Mode de paiement: </label>
        <select name="paiement">
            <option value="visa">VISA</option>
            <option value="mastercard">Mastercard</option>
            <option value="bancontact">Bancontact</option>
            <option value="paypal">PayPal</option>
        </select><br>
        <input type="submit" value="Payer">
    </form>
</body>
</html>