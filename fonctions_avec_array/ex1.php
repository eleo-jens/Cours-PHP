<?php

//Développez une fonction qui crée un array de 25 entiers aléatoires (utilisez mt_rand) et l'affiche

function create_array():void{
    $new_array = [];

    for ($i=0; $i < 25;$i++){
        $new_array[$i] = mt_rand(0,25);
        echo $new_array[$i] ." ";
    }
} 

create_array();
?>