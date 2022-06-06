<?php
// Créez une fonction qui reçoit un array associatif et affiche son contenu dans un tableau HTML

function affichage_tab_html(array $tab): void {
    echo "<table>";
    foreach ($tab as $key => $value){
        echo "<tr>";
            echo "<td>" .$key. "</td>";
            echo "<td>" .$value. "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

$tableau = ["nom" => "Doe", "prenom" => "Jane", "birth" => "02/05/1993", "city" => "Brussels"];

affichage_tab_html($tableau)
?>