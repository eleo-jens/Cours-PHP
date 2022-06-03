<?php

$UGC_price = 8;
$vandome_price = 11;
$delta = abs($UGC_price - $vandome_price); // fonction pour mettre en absolu
$reduction = $vandome_price - $vandome_price * 0.10; //$vandome_price * (1 - 0.10);

print ("La difference de prix est de " . $delta . " euros.");
print ("\nLe prix normal est de " . $vandome_price . " euros. Le prix avec 10% de reduction est: " . $reduction);

//$tauxReducation = 23;
//$prix2 = $prix * (1 -$tauxReduction/100);