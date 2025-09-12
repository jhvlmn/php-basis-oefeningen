<?php

/*

Run onderstaande programma en kijk wat er gebeurt.
Pas daarna het programma aan en maak de volgende opdrachten:

Opdracht 1: Als gebruiker het juiste getal geraden heeft, dan geeft het programma aan in hoeveel beurten de gebruiker het juiste getal geraden heeft;
Opdracht 2: Het programma stopt als de gebruiker een getal kleiner dan 1 geeft
Opdracht 3: Het programma stopt als de gebruiker een getal groter dan 100 geeft
Opdracht 4: Het programma stopt als de gebruiker het woord stop typt
Opdracht 5: Als de gebruiker een verkeerd antwoord geeft, dan geeft het programma aan of het antwoord hoger of lager is dan het willekeurige getal

*/

$getal = rand(1,100);
$raad = 0;

while($raad!=$getal){
    $raad = readline("Raad het getal: ");
}

echo "Het getal was $getal, je hebt het goed geraden";