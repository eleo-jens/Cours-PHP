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
        <?php
            $type_max = 5;
            for ($i = 1; $i <= $type_max; $i++){
                // if ($i == 1){
                //     print "<label>Chambre simple</label>";
                // }
                // elseif ($i == 2){
                //     print "<label>Chambre double</label>";
                // }
                // elseif ($i == 3){
                //     print "<label>Chambre simple deluxe</label>";
                // }
                // elseif ($i == 4){
                //     print "<label>Chambre double deluxe</label>";
                // }
                // elseif ($i == 5){
                //     print "<label>Chambre suite</label>";
                // }
                print "<select name='n.$i'>";
                $n_max = 4;
                for ($i = 0; $i < $n_max; $i++){
                    print "<option value='$i'>$i</option>";
                }
                print "</select><br>";
            }
        ?>
        <input type="submit" value="Valider">
    </form>
</body>
</html>