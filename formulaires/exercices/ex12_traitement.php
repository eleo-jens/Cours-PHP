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
        $price = $_POST['price'];
        $paiement = $_POST['paiement'];
        $visa = 3;
        $mastercard = 5;

        print "<h2>Recapitulatif de la commande</h2><br>";
        print "<h3>Prix: $price </h3>";
        if ($paiement == 'mastercard'){
            print "<h3>Frais mode de paiement ($paiement): $mastercard</h3>";
            print "<h3>Total: " .$price+$mastercard. "</h3>";
        }
        elseif ($paiement == 'visa'){
            print "<h3>Frais mode de paiement ($paiement): $visa</h3>";
            print "<h3>Total: " .$price+$visa. "</h3>";
        }
    ?>
</body>
</html>