<?php
$afficheValeurs = function(int $n1, int $n2): void 
{
    for($i = $n1+1; $i < $n2; $i++){
        print $i." ";
    }
};

$afficheValeurs(20,80);
?>