<?php

$tab = ['Belgique' => 'Bruxelles',
        'France' => 'Paris',
        'Espagne' => 'Madrid',
        'Inde' => 'New Delhi'];


$tab['USA'] = 'New York';
$tab['Italie'] = 'Rome';


foreach ($tab as $cle => $val){
    print("La capitale de " .$cle. " est " .$val. "\n");
}
print ("\nLes pays:\n");
foreach ($tab as $cle => $val){
    print($cle . " ");
}

print ("\n\nLes capitales:\n");
foreach ($tab as $val){
    print($val. " ");
}

// ceci est uniquement pour le debuggage pour voir le type de la variable et ce qu'elle contient
print_r($tab);
