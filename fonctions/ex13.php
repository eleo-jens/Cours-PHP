<?php
    declare(strict_types=1);
?>

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
        function afficher_vols(?array $tab):void 
        {
            if ($tab == null){
                print "error: no values";
            }
            else{
                print ("<table border = '3'>");
                print ("<tr>");
                foreach ($tab as $price){
                    print ("<td>");
                    if ($price < 300){
                        print ("<h4 style='color:red'>" .$price. "</h4>");
                    }
                    else {
                        print ("<h4>". $price. "</h4>");
                    }
                    print("</td>");
                }
                print ("</tr>");
                print ("</table>");
            }
        }
        $vols = [500, 450, 599, 699, 256, 299, 200, 170, 356, 654];
        //$vols = null;
        afficher_vols($vols);
    ?>
</body>
</html>