<!-- Créez un formulaire qui nous permette de choisir le nom d'un animal d'une liste déroulante. 
Quand on envoie les données, une image de l'animal choisi sera affichée. 
Les images se trouvent dans le serveur -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./ex7_traitement.php" method="POST">
        <labe>Choose a pet:</label>
        <select name="animal">
            <option value="" disabled>--Choose a pet--</option>
            <option value="chat">Chat</option>
            <option value="chien">Chien</option>
            <option value="rat">Rat</option>
            <option value="poisson">Poisson</option>
            <option value="hamster">Hamster</option>
            <option value="cobaye">Cobaye</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>