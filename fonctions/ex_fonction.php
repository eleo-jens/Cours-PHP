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
        //par valeur
        function addition($v1, $v2){
            return $v1 + $v2;
        }

        $val1 = 5;
        $val2 = 10;

        $somme = addition($val1, $val2);
        print ("<h4>La somme est: " .$somme. "</h4>");

        //par référence
        function add(&$v1, $v2){
            $v1 = 20;
            return $v1 + $v2;
        }
        
        $somme = addition($val1, $val2);
        print ("<h4>La somme est: " .$somme. "</h4>");

        $tab = [4, 10, 15, 20];

        //function pour renverser un tableau qui modifie directement l'original: REFERENCE
        function reverser (&$tableau){
            $temp = [];

            for ($i = count($tableau)-1; $i > 0; $i--){
                $temp[] = $tableau[$i];
            }
            $tableau = $tableauTemp;
        }

        renverser($tab);
        print_r ($tab);

        //fonction qui renvoie un nouveau tableau avec les éléments renversés
        $tab2 = ['ab','bc','y'];

        function renverse_valeur ($tableau){
            $temp = [];
            for ($i = count($tableau)-1; $i > 0; $i--){
                $temp[] = $tableau[$i];
            }
            return ($temp);
        }

        $new_tab = reverser_valeur ($tab2);
        print_r ($new_tab);

    ?>
</body>
</html>