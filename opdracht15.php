<?php

/*

Run onderstaande programma en kijk wat er gebeurt.
Pas daarna het programma aan en maak de volgende opdrachten:

Opdracht 1: Pas het programma aan en voeg 10 woorden toe
Opdracht 2: Programmeer een teller die wanneer het woord goed geraden is aangeeft in hoeveel beurten het juiste woord geraden is

*/


$woorden = ["Appel", "Peer", "Kiwi", "Sinaasappel"];
$randomWoord = $woorden[rand(0,3)];
$raadWoord = "";

echo "De volgende woorden zitten in de database: \n";
for($i=0; $i<3; $i++){
    echo $woorden[$i];
    echo "\n";
}


while($raadWoord != $randomWoord){
    $raadWoord = readline("Wat is het woord: ");
}

echo "Het woord was $randomWoord, goed geraden";