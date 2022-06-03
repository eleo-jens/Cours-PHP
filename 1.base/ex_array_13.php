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

$prices = [];
$n = 10;

while ($n > 0){
    $prices[] = read("Indiquez un prix: ");
    $n--;
}

foreach ($prices as &$val){
    $val = $val * 1.12;
    print ($val. " ");
}






