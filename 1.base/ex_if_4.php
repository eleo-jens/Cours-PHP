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

$year = read("Quelle année 1, 2 ou 3: ");
$absence = read("Combien d'absences: ");
$taux = (50 - $absence) / 50 * 100;

if ($year == "1"){
    $min = 80;
}
else if ($year == "2"){
    $min = 70;
}
else {
    $min = 60;
}

if ($taux >= $min){
    print "L'élève a réussi !";
}
else {
    print "L'élève a raté !";
}