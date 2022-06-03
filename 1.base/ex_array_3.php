<?php

$villes = ['Bruxelles', 'Mumbai', 'Berlin', 'Delhi', 'Gand'];

for ($i = 0; $i < count($villes); $i++){
    print($villes[$i]. " ");
}

print("\n". $villes[0]. " " .$villes[1]. " " .$villes[2]. " " .$villes[3]. " " .$villes[4]. "\n");

$villes[] = 'Tempa';
$villes[] = 'Goa';

foreach ($villes as $ville){
    print($ville. " ");
}

$villes[0] = 'Quito';

print("\n". $villes[0]);