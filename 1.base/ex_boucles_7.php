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

$num = read("Quel est le nombre de valeurs que vous voulez multiplier ? ");
while ($num > 0){
    $valeur = read("Donnez une valeur: ");
    $total = $total * $valeur;
    $num--;
}
print("Le total de la multiplication est: " .$total);
