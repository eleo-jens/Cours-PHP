<?php

$tab1 = [4,8,7,9,1,5,4,6];
$tab2 = [7,6,5,2,1,3,7,4];
$result = [];

for ($i = 0; $i < count($tab1); $i++){
    $result[$i] = $tab1[$i] + $tab2[$i];
    print($result[$i]. " ");
}