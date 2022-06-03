<?php
// Créez une fonction qui reçoit un array associatif et affiche son contenu dans un tableau HTML

function affichage_tab_html(array $tab): void {
    echo "<table>";
    for ($i=0; $i > count($tab); $i++){ 
        echo "<tr>";
            for ($i=0; $i > count($tab); $i++){
                echo "<td>" .$i. "</td>";
                echo "<td>" .$tab[$i]. "</td>";
            }
        echo "</tr>";
    }
    echo "</table>";

}

$tableau = ["nom" => "Doe", "prenom" => "Jane", "birth" => "02/05/1993", "city" => "Brussels"];
echo count($tableau);

affichage_tab_html($tableau)
?>