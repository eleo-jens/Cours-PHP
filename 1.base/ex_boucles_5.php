<?php

$count = 51;
while ($count < 100){
    print("\n" .$count);
    $count +=2;
}

// version avec le modulo est le reste de la division entiere => %
// 10/5 = 2 - reste = 0
// 10/3 = 3 - reste = 1
// 10/2 = 5 - reste = 0 -> chiffre pair
// 11/2 = 5 - reste = 1 -> chiffre impair

// for ($i = 50; $i <= 100; $i++){
//     if ($i % 2 == 1){
//         print("\n" .$i);
//     }
// }