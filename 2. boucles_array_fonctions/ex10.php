<?php
// Créez une fonction qui reçoit un array et le renverse (l'array original change, on a besoin d'utiliser une référence)

function reverse_tab(array &$tab): void{
    $new_tab = [];
    for ($i = count($tab)-1; $i >= 0; $i--){
        $new_tab[] = $tab[$i];
    }
    $tab = $new_tab;
}

$vals = [20, 50, 7, 54];
reverse_tab($vals);

var_dump($vals);
?>