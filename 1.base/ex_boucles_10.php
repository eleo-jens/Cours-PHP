<?php

for ($hour = 1; $hour <= 24 ; $hour++){
    print ("\n" . $hour . " h \n"); 
    for ($min = 5; $min <= 55; $min += 5){
        print ($min . " min \n");
        for ($sec = 10; $sec <= 50; $sec += 10){
            print ($sec . " sec \n");   
        }
    }
}