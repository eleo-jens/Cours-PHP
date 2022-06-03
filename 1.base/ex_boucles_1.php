<?php
// ce code nous permet de lire du clavier
function read($message = NULL)
{
        print $message;
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
}

$age = read("Quel est votre age: \n");
var_dump ($age); // fonction qui permet de debugger en verifier le type de la variable
while ($age <= 0 OR $age > 130){
    $age = read("Quel est votre age - Tapez une valeur correcte: \n");
}
if ($age >= 18){
    print "Bienvenue !";
}
else {
    print "Vous etes trop jeune, revenez plus tard !";
}