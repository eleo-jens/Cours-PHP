<?php

$val = [20, 50, 7 , 54];

$val[] = 150;
$val[] = 300;

foreach ($val as $cle => $valeur){
    print($cle . " : " .$valeur. "\n");
}

for ($i = 0; $i < count($val); $i++){
    print($val[$i]. " ");
}