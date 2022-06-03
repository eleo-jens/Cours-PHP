<?php

$tab = ['Harry Potter' => 'Chris Columbus',
        'Seigneurs des anneaux' => 'Peter Jackson',
        'Spiderman' => 'Sam Raimi'];

foreach ($tab as $cle => $valeur){
    print($cle. " : " .$valeur. "\n");
}

$tab['Harry Potter'] = 'Ed Wood';

print($tab['Harry Potter']);