<?php

$tab = [];

for ($i = 1; $i <= 200; $i++){
    $tab[$i] = $i;
    print($tab[$i]. " ");
}
print "\n\n";

for ($i = 1; $i <= count($tab); $i++){
    $tab[$i] = $tab[$i] * 2;
    print($tab[$i]. " ");
}
// ceci ne marche pas avec un foreach la valeur $valeur en memoire est perdue
// ca change tout le temps \ $valeur prend 3 puis 4 puis 5 etc.
// par contre en utilisant la valeur de reference/ le pointeur ca fonctionne : voir ci dessous
print "\n\n";

foreach ($tab as &$valeur){
    $valeur = $valeur * 2;
    print($valeur. " ");
}
// la reference ca fait que au lieu de faire une copie de la valeur,
// on est en train d'acceder a la valeur elle-meme