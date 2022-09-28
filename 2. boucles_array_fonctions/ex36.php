<?php
declare(strict_types=1);
$wad22=["Aless","Maya","Menen","Sarah","Nastia","Elé","Paula","Bao","Mariam","Myriam","Camille","Anissa"];

function pickStudent(array $array): void{
    $copy = [];
    foreach($array as $val){
        $copy[] = $val;
    }

    $count = count($array);
    $index = 0;
    while ($count != 0){
        $index = rand($index, $count);
        $count --;
    }

}

?>