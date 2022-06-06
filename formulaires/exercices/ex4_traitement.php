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
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $numbers = range($n1, $n2);
        print "<h2> Les valeurs entre " .$n1. " et " .$n2. ":</h2>";
        print "<table border='3'>";
        print "<tr>";
        foreach ($numbers as $value){
            print "<td><h4>". $value ."<h4></td>";
        }
        print "</tr>";
        print "</table>"
    ?>
</body>
</html>