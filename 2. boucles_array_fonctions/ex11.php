<?php
declare(strict_types=1);

$film1=["nom"=>"Harry Potter à l'école des sorciers", "genre"=>"Fantastique","realisateur"=>"Daniel Radcliff"];
$film2=["nom"=>"The Lord of the Rings: The Fellowship of the Ring","genre"=> "Fantastique", "realisateur"=>"Peter Jackson"];
$film3=["nom"=>"Spiderman: No Way Home","genre"=> "Action", "realisateur"=>"Jon Watts"];


$afficheAssoc = function($array): void 
{
    foreach($array as $cle => $val)
    {
        print $cle. " : " .$val ."\n";
    }
};

$film1["dateSortie"] ="1996";
$film2["dateSortie"] = "1998";
$film3["dateSortie"]= "2021";

$afficheAssoc($film2);

unset($film1["realisateur"]);

$afficheAssoc($film1);