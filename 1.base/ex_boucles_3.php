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

$count = 0;
$age = read("Quel est votre age: \n");
while (($age < 0 || $age > 130) && $count < 2){
    $count++;
    $age = read("Quel est votre age: \n");
}

if ($count == 2){
    echo "Au revoir !";
}
else if ($age >= 18){
    print "Bienvenue !";
}
else {
    print "Vous etes trop jeune !";
}