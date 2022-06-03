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

$name1 = "T-shirt";
$price1 = 12;
$name2 = "Baskets";
$price2 = 55;
$name3 = "Laptop";
$price3 = 725;

print ("Prix du " .$name1. " : " .$price1. ", Prix des " .$name2. " : " .$price2. ", Prix du " .$name3. " : " .$price3. " \n");

$quantity1 = read("Quelle quantite de " .$name1. " voulez-vous ? ");
$quantity2 = read("Quelle quantite de " .$name2. " voulez-vous ? ");
$quantity3 = read("Quelle quantite de " .$name3. " voulez-vous ? ");

$livraison = 2;
$fidelity = 20;
$reduction = 10;

if ($quantity1 > 5){
    $finalprice1 = $price1 * (1 - $reduction);
}
if ($quantity2 > 5){
    $finalprice2 = $price2 * (1 - $reduction);
}
if ($quantity3 > 5){
    $finalprice3 = $price3 * (1 - $reduction);
}


$total = $price1 * $quantity1 + $price2 * $quantity2 + $price3 * $quantity3;
print ("Le prix total est: " .$total);