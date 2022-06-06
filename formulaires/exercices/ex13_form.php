<!-- Créez un formulaire qui permette d'introduire un prix et le rajouter la TVA. 
Cette fois ci l'utilisateur choisit la valeur de TVA parmi plusieurs valeurs en utilisant des radios-buttons -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="./ex8_traitement.php" method="POST">
        <h2>Calculateur de TVA</h2>
        <label>Prix sans tva:</label><input type="number" name="price" min="0" oninput="validity.valid||(value='')"><br>
        <label>TVA:</label><br>
        <label>21 %</label><input type="radio" value="1.21" name="tva"><br>
        <label>12 %</label><input type="radio" value="1.12" name="tva"><br>
        <label>6 %</label><input type="radio" value="1.06" name="tva"><br>
        <input type="submit" value="Calculer" class="btn">
    </form>
</body>
</html>