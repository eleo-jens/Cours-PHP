<?php
// Créez une fonction qui reçoit un array associatif et renvoie un nouvel array contenant uniquement ses clés

function tab_key(array $tab): array{
    $new_tab = [];
    $i = 0;
    foreach ($tab as $key => $value){
        $new_tab[$i] = $key;
        $i++;
    }
    return $new_tab;
}

$tab = ["age" => "45", "nom" => "hell", "car" => "Tesla"];
$new_tab = tab_key($tab);

var_dump($new_tab);
?>
