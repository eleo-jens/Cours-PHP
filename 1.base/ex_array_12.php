<?php

function read($message = NULL)
{
        print $message;
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
}

$valeurs = [];
$nombre = read("Combien de valeurs voulez-vous saisir ? ");
while ($nombre > 0){
    $valeurs[] = read("Indiquez une valeur: ");
    $nombre--;
}

$max = 0;
$pos = 0;
foreach ($valeurs as $cle => $val){
    if ($val > $max){
        $max = $val;
        $pos = $cle;
    }
}
print("Max: " .$max. " en index: " .$pos);