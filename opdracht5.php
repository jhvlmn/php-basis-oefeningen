<?php

/*
Opdracht: Kop of munt
Onderstaande programma genereert random een nummer tussen 0 en 1
Als het nummer 0 is heb je kop gegooid en als het nummer 1 is heb je munt gegooid.
Pas het programma aan, zodat wanneer het nummer 1 is de tekst "Je hebt MUNT gegooid" 
getoond wordt.
*/

$nummer = rand(0,1);
if($nummer==0){
    echo "Je hebt KOP gegooid.";
}

?>