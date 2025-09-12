<?php
/*
Opdracht: Bedragen tellen
Pas onderstaande programma aan, zodat alle ingevoerde bedragen bij elkaar opgeteld worden
Het totaalbedrag wordt dan getoond zodra de gebruiker het programma stopt.
*/
$stop = 'ja';
$totaalBedrag = 0;
while($stop == 'ja'){
    $bedrag = readline("Geef een bedrag: ");
    $stop = readline("wil je nog een bedrag invoeren ja/nee: ");
}
echo "Totaalbedrag is: $totaalBedrag";


?>