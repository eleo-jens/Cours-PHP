<?php
// Créez une fonction qui reçoit un array et renvoie un array inversé

declare(strict_types=1);

function reverse_array(array $tab): array
{
    $new_tab = [];
    for ($i = (count($tab)-1); $i >= 0; $i--) {
        $new_tab[] = $tab[$i];
    }
    return $new_tab;
}

$vals = [20, 50, 7, 54];
$new_tab = reverse_array($vals);

var_dump($new_tab);
?>