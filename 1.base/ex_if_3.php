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
while ($number2 == 0){
    $number2 = read("Donnez moi un deuxieme chiffre plus grand que 0: ");
}
$op = read("Tapez + pour additionner, - pour soustraire, * pour multiplier ou / pour diviser: ");

if ($op == "+"){
    $addition = $number1 + $number2;
    print ($number1 . " + " . $number2 . " = " . $addition . "\n");
}
else if ($op == "-"){
    $soustraction = $number1 - $number2;
    print ($number1 . " - " . $number2 . " = " . $soustraction . "\n");
}
else if ($op == "*"){
    $multiplication = $number1 * $number2;
    print ($number1 . " * " . $number2 . " = " . $multiplication . "\n");
}
else if ($op == "/"){
    $division = $number1 / $number2;
    print ($number1 . " / " . $number2 . " = " . $division . "\n");
}


