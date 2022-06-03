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

$temp = read("Quelle est la temperature dans votre salle: ");
if ($temp < 15) {
    print "Ca caille! Montez le chauffage!";
}
else if ($temp <25) {
    print "Il fait bon.";
}
else {
    print "Trop chaud ! Descendez la temperature !";
}