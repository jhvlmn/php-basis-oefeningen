<?php
/*
Opdracht: Toets
Pas onderstaande programma aan, zodat er drie vragen gesteld en gecontroleerd worden.
Vragen mag je zelf bedenken.
Zorg ervoor dat het programma aangeeft of een vraag goed of fout geantwoord is.
Zorg er ook voor dat het programma het aantal goede aantwoorden bijhoudt en dit aan het
einde op het scherm toont.
*/

$vraag = readline("Wat is de hoofdstad van Nederland? ");
if($vraag == 'Amsterdam'){
    echo "Dit is het goede antwoord\n";
}else{
    echo "Dit antwoord is fout\n";
}
?>