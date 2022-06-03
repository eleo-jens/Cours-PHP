<?php
// Modifiez la fonction précédente pour qu'elle puisse recevoir le nombre de valeurs qui contient l'array

function create_array(int $nb): void {
    $new_array = [];
    for ($i=0; $i < $nb; $i++){
        $new_array[$i] = mt_rand(0, $nb);
        echo $new_array[$i] ." ";
    }
}

create_array(10);
?>