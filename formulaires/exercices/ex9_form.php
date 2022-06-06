<!-- Pour une application web de réservations de chambres dans un hôtel, nous avons besoin 
d'un formulaire permettant de choisir le nombre de chambres de chaque type (simples, doubles, suites)
souhaitées par un client. Fixez le prix de chaque type de chambre dans une variable. 
Une fois les données seront envoyées, on calculera le prix total de la réservation. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex9_traitement.php" method="POST">
        <label>Chambre simple</label>
        <select name="n1">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <label>Chambre double</label>
        <select name="n2">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <label>Chambre simple deluxe</label>
        <select name="n3">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <label>Chambre double deluxe</label>
        <select name="n4">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <label>Chambre suite</label>
        <select name="n5">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <input type="submit" value="Valider">
    </form>
</body>
</html>