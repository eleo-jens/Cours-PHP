<?php
// Développez une fonction capable de créer un array d'un nombre aléatoire de valeurs (entre 20 et 40) et le renvoie. Affichez son contenu dans le script principal, ainsi que le nombre d'éléments de l'array

function create_array(): array{
    $new_array = [];
    $nb = mt_rand(20, 40);
    for ($i=0; $i < $nb; $i++){
        $new_array[$i] = mt_rand(0, $nb);
        echo $new_array[$i] ." ";
    }
    return $new_array;
}

$tab = create_array();
foreach ($tab as $value){
    echo $value. " ";
}
echo "\nNombre d'élements: ". count($tab);

?>