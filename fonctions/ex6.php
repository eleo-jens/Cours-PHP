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
        function afficher_tab(array $tableau): void 
        {
            print ("<table border='3'>");
                print ("<tr>");
                foreach ($tableau as $value){
                    print ("<td> " .$value. " </td>");
                }
                print ("</tr>");
            print ("</table>");
        }
        $tab = ['hello', 'chat','chien','tennis'];
        afficher_tab($tab);
    ?>
</body>
</html>