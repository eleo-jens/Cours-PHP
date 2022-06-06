<?php
// Créez une fonction qui reçoit un nom et affiche "Bonjour (nom)!". Testez-la avec plusieurs noms

declare(strict_types=1);

function read($message = NULL)
{
        print $message;
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
}

function hello_name(string $name): string{
    return "Bonjour " .$name. "!"; 
}

$name = read("Quel est votre nom ? ");
echo hello_name($name);
?>