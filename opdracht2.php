<?php
//Opdracht: Opdracht en oppervlakte berekenen
//Verander onderstaande programma, zodat je de inhoud kunt berekenen
//Dit kun je doen door een extra parameter 
//$hoogte toe te voegen en de berekening aan te passen.

echo "Met dit programma kun je de oppervlakte berekenen:\n\n\n";

$lengte = readline("Wat is de lengte: ");
$breedte = readline("Wat is de breedte: ");
//Hier de extra parameter $hoogte toevoegen


$oppervlakte = $lengte * $breedte;
//Hier de berekening aanpassen

echo "De oppervlakte is: $oppervlakte";
die;
?>