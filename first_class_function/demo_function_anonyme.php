<?php
echo "--- Fonction anonyme envoyée en paramètre ---\n";

$unArray = ["nom", "prénom", "adresse"];

$unArray = array_map (function ($val) {
    return (ucfirst($val));
}, $unArray);

print_r($unArray);

echo "--- Fonction anonyme envoyée en paramètre: créer la fonction d'abord, puis la mettre dans une variable et puis faire appel à array_map ---\n";

$unArray = ["nom", "prénom", "adresse"];
$capitalize = function ($val) {
    // met la valeur reçue en majuscules et le renvoi
    return (ucfirst($val));
};

// lisez la doc d'array_map!
$unArray = array_map ($capitalize, $unArray);

print_r($unArray);

echo "--- renvoyée dans un return. La fonction renvoyée ne renvoie rien ---\n";

function generateurAffiche (){
    return (function ($msg):void {
        echo "<br>Je suis la nouvelle fonction et j'affiche ". $msg;
    });
}
echo "<br><br><br>";
$fn = generateurAffiche(); // me renvoie une fonction
$fn ("Alice");
$fn ("Julie");

echo "\n--- renvoyée dans un return. La fonction renvoie qqch ---\n";

function generateurCalcul (){
    return (function ($v1 , $v2): int{
        return $v1 + $v2;
    });
}
echo "<br><br><br>";
$fn = generateurCalcul();
$somme = $fn (100,200);
echo "<br>La somme est : ". $somme;

echo "\n--- renvoyée dans un return. La fonction renvoie qqch ---\n";

function generateurCalculateurSurfaces(string $nomFigure): callable
{
    // cette fonction crée une fonction qui sera renvoyée
    // pour être utilisée plus tard


    switch ($nomFigure) {
        case "carre":
            return (function (float $cote): float {
                return $cote * $cote;
            });
            break;
        case "cercle":
            return (function (float $rayon): float {
                return pi() * pow($rayon, 2); // pow est la puissance
            });
            break;
        default:
            return null;
    }
}

$calculatriceCarres = generateurCalculateurSurfaces("carre");
echo "<br>Surface de ma chambre (carre): ";
echo $calculatriceCarres(3.5);
echo "<br>Surface d'une autre chambre (carre): ";
echo $calculatriceCarres(12.3);

$calculatriceCercles = generateurCalculateurSurfaces("cercle");
echo "<br>Surface d'un disque de vinyl: ";
echo $calculatriceCercles(15);

?>