<?php

$tab1 = [3, 6];
$tab2 = [4, 8, 7, 12];
$res = 0;

for ($i1 = 0; $i1 < count($tab1); $i1++){
    for ($i2 = 0; $i2 < count($tab2); $i2++){
        $res = $res + $tab1[$i1] * $tab2[$i2];
    }
}
print ($res. " ");