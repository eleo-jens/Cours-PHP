<?php
// Créez une fonction qui reçoit un array associatif et renvoie un nouvel array contenant uniquement ses valeurs

function tab_key(array $tab): array{
    $new_tab = [];
    $i = 0;
    foreach ($tab as $value){
        $new_tab[$i] = $value;
        $i++;
    }
    return $new_tab;
}

$tab = ["nom" => "45", "age" => "hell", "car" => "Tesla"];
$key_tab = tab_key($tab);

var_dump($key_tab);
?>