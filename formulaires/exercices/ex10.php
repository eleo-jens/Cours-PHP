<!-- Nous avons une liste de produits dans un array. 
Créer un code PHP capable d'afficher une liste déroulante contenant tous les produits. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $products = ["Screen", "Mouse", "Keyboard", "Case", "HDD", "SDD", "CPU", "Power bloc", "RAM"];
        print "<select name='products'>";
        print "<option value='' disabled>Choose</option>";
        foreach ($products as $key => $product){
            print "<option value='$key'>$product</option>";
        }
        print "</select>";
    ?>
</body>
</html>