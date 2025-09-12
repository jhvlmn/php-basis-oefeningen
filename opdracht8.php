<?php
/*
Opdracht: De tafel van uitgebreid
Pas onderstaande programma aan, zodat begin en einde werken
*/
$tafel = readline("Welke tafel wil je zien? ");
$van = readline("Waar wil je beginnen?");
$tm = readline("Waar wil je stoppen");

for($i=0; $i<10; $i++){
    $uitkomst = $i * $tafel;
    echo "$i keer $tafel is $uitkomst\n";
}
?>