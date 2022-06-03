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

for ($i = 0; $i < count($valeurs); $i++){
    $valeurs[$i] += 1;
    print($valeurs[$i]. " ");
}