<?php
/*
Opdracht: De tafel van
Pas onderstaande programma aan, zodat de uitkomst begint bij 1 en eindigt bij 10
*/
$tafel = readline("Welke tafel wil je zien? ");
for($i=0; $i<10; $i++){
    $uitkomst = $i * $tafel;
    echo "$i keer $tafel is $uitkomst\n";
}
?>