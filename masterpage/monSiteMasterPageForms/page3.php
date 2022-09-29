<!-- on charge dans l'index la page de traitement car si on indique action="./page3Traitement.php" on aura pas de header ni footer -->
<form action="./index.php?p=page3Traitement" method="POST">
    <label for="nom">Votre nom: </label><input type="text" name="nom" id="nom">
    <input type="submit">
</form>