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

$number1 = read("Donnez moi un premier chiffre: ");
$number2 = read("Donnez moi un deuxieme chiffre: ");

$addition = $number1 + $number2;
$soustraction = $number1 - $number2;
$multiplication = $number1 * $number2;
// faire un if pour la division par 0
$division = $number1 / $number2;

print ($number1 . " + " . $number2 . " = " . $addition . "\n");
print ($number1 . " - " . $number2 . " = " . $soustraction . "\n");
print ($number1 . " * " . $number2 . " = " . $multiplication . "\n");
print ($number1 . " / " . $number2 . " = " . $division . "\n");
