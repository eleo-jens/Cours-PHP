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
        function valeurs_lotto() {
            for ($i = 1; $i <= 6; $i++){
                $random = mt_rand(0, 99);
                print("<h2>" .$random. "</h2>");
            }
        }
        valeurs_lotto();
    ?>
</body>
</html>