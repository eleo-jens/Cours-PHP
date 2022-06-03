<?php

$prices = [1000,800,900,700,800,900,1800,1900,1400,1500];

$tot = 0;
foreach ($prices as $valeur){
    print($valeur. "\n");
    $tot = $tot + $valeur;
}
print ("La moyenne : " .$tot/count($prices) ."\n");

for ($i = 0; $i < count($prices); $i++){
    if ($prices[$i] < 900){
        print ("\nPromo: " .$prices[$i]);
    }
}

$i = 0;
$count = 0;
$total = 0;
while ($i < count($prices)){
    $prices[$i] = $prices[$i] / 2;
    print("\nReduction: " .$prices[$i]);
    if ($prices[$i] < 700){
        $count++;
    }
    $total = $total + $prices[$i];
    $i++;
}
print ("\nNombres de vols a moins de 700 euros: " .$count);
print ("\nLa moyenne : " .$total/count($prices) ."\n");

print("\nPrix en dollar: ");
for ($i = 0; $i < count($prices); $i++){
    $prices[$i] = $prices[$i] * 1.05;
    print ($prices[$i]. "\n");
}
