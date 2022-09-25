<?php

// ce code nous permet de lire du clavier comme input en Python
function read($message = NULL) // pour dire que le parametre est optionnel = null
{
        print $message;
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
}

$name = "Nemish";
// une variable en php commence par $variable et finir avec ;
// comme en python il ne faut PAS mettre str
$price = 50;
$price *= $price; //$price = $price * 2;

// deux facons d'afficher qqch: print et echo
print $name; //print accepte seulement un argument et renvoi toujours 1
echo "\n" . $price;

$v1 = true and true; // true
print $v1;
$v2 = true && false; // false
print $v2;

// ne va jamais rentre dans le if car c'est false, si je met true, je rentre toujours
if (false) {
    print("c'est faux !");
}
// le calcul de ca, ca donne false
$age = 18;
if ($age > 18) {
    print("On entre!");
}

if ($age = 18) { // if (18) {...}
    print("on rentre !");
}
// le 0 est assimilable a false, une string "" est aussi assimilable a faux, NULL aussi 
// des valeurs falsish
$val = [];
if ($val) {
    print("on rentre pas dans le test");
}

// concatenation 
$nom = "Pauline";
print("\nLe nom est " . $nom . ". Elle a " . $age . " ans.\n");
print('Le nom est ' . $nom  . "\n"); // le guillement simple ne prend pas le \n
print("Le nom est $nom\n"); // ici on est pas obligé de concatener
print('Le nom est $nom');
print("\nLe surnom est 'Le fantastique'");

$input = read();
print("\nL'input est: " .$input);

$input = read ("\nTapez un message: ");
print("\nL'input est: " .$input);

$nom1 = "Camille";
$nom2 = "Myriam";

$nom3 = $nom1;
$nom = "HEllo";
print ("\n" . $nom1);
print ("\n" . $nom2);
print ("\n" . $nom3);

$val1 = "coco";
$val2 = "aless";
$val3 = &$val2;
print ("\n" . $val2);
print ("\n" . $val3);
$val2 = "Nouvelle Aless";
print ("\n" . $val2);
print ("\n" . $val3);

//function qui echange les valeurs de deux variables
$var1 = 10;
$var2 = 20;
print ("\nvar1: " . $var1);
print ("\nvar2: " . $var2);

// probleme ici les valeurs ne changent qu'au sein de la fonction et ne peut renvoyer que 1 valeurs et pas les deux
// function echanger ($v1, $v2){
//     $temp = $v1;
//     $v1 = $v2;
//     $v2 = $temp;
// }

// on utilise des references/des pointeurs pour changer les variables originales
function echangerRef (&$v1, &$v2){
    $temp = $v1;
    $v1 = $v2;
    $v2 = $temp;
}

echangerRef ($var1, $var2);
print ("\nvar1: " . $var1);
print ("\nvar2: " . $var2);