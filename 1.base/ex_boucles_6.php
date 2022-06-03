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

$number = read("Donnez un nombre: \n");
$count = 0;
while ($count < 10){
    $count++;
    print ($number + $count . "\n");
}

for ($count=1; $count <= 11; $count++){
    print($count + $number . "\n");
}