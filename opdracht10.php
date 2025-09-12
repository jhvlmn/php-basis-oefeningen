<?php

/*
Opdracht: Piramide
Onderstaand programma tekent met sterretjes (*) een piramide van 5 lagen.
Pas het programma aan, zodat er een piramide van 10 lagen getekent wordt.
*/

$teller = ceil(10 / 2);
for($i = 0; $i<10; $i = $i +2){
   
    for($k=0; $k<$teller; $k++){
        echo " ";
    }
    for($j=0; $j<=$i; $j++){
        echo "*";
    }
    
    echo "\n";
    $teller--;
  
}

?>