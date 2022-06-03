<!DOCTYPE = html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Salut les WAD22 !
    <br>
    <img style = "max-width:50%" src = "./images/image1.jpg" alt = "Image d'une foret">

    <?php
        print ("<h3>Je suis un print dans php</h3>");
    ?>

    Je suis encore du html

    <table border ="3">
    <?php
        $tab1 = ['Paula', 'Ele', 'Coco']; // ce tableau est censé venir d'une base de données
        $tab2 = ['Myriam', 'Paula', 'Maya'];

        print "<tr>";
        foreach ($tab1 as $nom){
            print "<td>" .$nom. "</td>"; 
        }
        print "</tr>";
        print "<tr>";
        foreach ($tab2 as $nom){
            print "<td>" .$nom. "</td>"; 
        }
        print "</tr>";

    ?>
    </table>

    <!-- exemple de tableau html fixe -->
    <table border ="3"> <!-- veille border, plutot utiliser une feuille CSS -->
        <tr> <!-- table row: une ligne du tableau -->
            <td>Ele</td> <!-- td: une data du tableau, une colonne -->
            <td>Maya</td>
            <td>Leal</td>
        </tr>
        <tr>
            <td>Thomas</td>
            <td>Paula</td>
            <td>Bao</td>
        </tr>
    </table>

    <?php
        print date("d-m-y h:i:s"); // ici c'est l'heure du serveur et non du client
    ?>
</body>
</html>