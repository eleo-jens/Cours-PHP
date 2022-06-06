<?php
// Modifiez l'exercice précédent pour que la fonction renvoie un array contenant les clés tries par ordre alphabétique

function tab_key_order(array $tab): array {
    ksort($tab);
    $new_tab = [];
    $i = 0;
    foreach ($tab as $key => $value)
    {
        $new_tab[$i] = $key;
        $i++;
    }
    return $new_tab;
}

$tab = ["nom" => "45", "age" => "hell", "car" => "Tesla"];
$order_key = tab_key_order($tab);

var_dump($order_key);
?>