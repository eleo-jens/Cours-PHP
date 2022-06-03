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
        function table_multiplication($number){
            print ("<h1> La table de multiplication de : " .$number. "</h1>");
            for ($i = 0; $i <= 10; $i++){
                print ("<h4>" .$number. " x " .$i. " = " .($number*$i). "</h4>");
            }
        }
        $num = $_POST['number'];
        table_multiplication($num);
    ?>
</body>
</html>