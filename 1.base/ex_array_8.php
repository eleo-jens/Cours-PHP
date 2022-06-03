<?php

$notes = [20, 10, 5, 15, 16];

$i = 0;
$total = 0;
while ($i < count($notes)){
    print($notes[$i]. " ");
    $total = $total + $notes[$i];
    $i++;
}
print("\nLa moyenne est de " .($total/$i) . "\n");

$total = 0;
for ($i = 0; $i < count($notes); $i++){
    print($notes[$i]. " ");
    $total = $total + $notes[$i];
}
print("\nLa moyenne est de " .($total/$i));
