<?php
// Développez une fonction capable de créer un array de 25 entiers aléatoires (utilisez rand) et le renvoyer. Testez-la.

function create_array(): array{
    $new_array = [];
    for ($i=0; $i < 25; $i++){
        $new_array[$i] = mt_rand(0, 25);
    }
    return $new_array;
}

$tab = create_array();
foreach ($tab as $value){
    echo $value. " ";
}
?> 