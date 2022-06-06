<?php
// Créez une fonction afficheTableau qui reçoit un array et affiche son contenu. Utilisez foreach pour vous faciliter la tâche. Testez-la avec l'array $vals

declare(strict_types=1);

function afficheTableau(array $tab):void{
    foreach ($tab as $value){
        print $value ." ";
    }
}

$vals = [20, 50, 7 , 54];
afficheTableau($vals);
?>