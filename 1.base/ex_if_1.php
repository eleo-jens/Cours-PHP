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

$largeur = read("Quelle est la largeur: \n");
$longueur = read("Quelle est la longeur: \n");
$surface = $largeur * $longueur;
if ($largeur == $longueur){
    print ("La chambre est carree !");
}
else {
    print ("La surface est : " .$surface);
}

