<!-- Créez un formulaire où on saisit un prix. 
Le formulaire doit avoir aussi une caisse à cocher "Réduction" qui permet d'appliquer 
une réduction d'un 10% au prix -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./ex14_traitement.php" method="POST">
        <label>Prix: </label><input type="number" name="price" min="0" oninput="validity.valid||(value='')"><br>
        <!-- if the checkbox is not send then no data will be send to the server, so our traitement code will 
        work when the user check the box, but there will be an error :array indefined if it is unchecked
        so ze use hidden with a false value for that case. If the user checks the box, both values are send but
    |   the server will ignore the false value-->
        <input type="hidden" name="reduction" value="false">
        <input type="checkbox" name="reduction" value="true"> 
        <label for="red">Reduction</label><br>
        <input type="Submit" value="Commander">
    </form>
</body>
</html>