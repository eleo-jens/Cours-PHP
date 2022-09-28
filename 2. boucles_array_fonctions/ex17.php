<?php
declare(strict_types=1);

function soustraction(float $v1, float$v2): float{
    if ($v1 - $v2 < 0){
        print ("Le résultat est négatif !\n");
    }
    return $v1 - $v2;
}

print(soustraction(15,25));

?>