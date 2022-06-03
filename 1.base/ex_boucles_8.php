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

$total = 1;
$valeur = read("Donnez une valeur, -1 pour arreter: ");
while ($valeur != -1){
    $total = $total * $valeur;
    $valeur = read("Donnez une valeur, -1 pour arreter: ");
}
print("Le total de la multiplication est: " .$total);