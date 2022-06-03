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
        function add($v1,$v2){
            print ("<h2>La somme est: " .$v1 + $v2. "</h2>");
        }
        
        $val1 = 5;
        $val2 = 10;
        add($val1, $val2);
    ?>
</body>
</html>