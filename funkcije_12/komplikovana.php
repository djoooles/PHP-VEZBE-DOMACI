<?php

function izracunajPopust($cena)
{
    return $cena*0.50;
}

$brojevi = [250,330,1000,2000,5000];
$popusti =[];

foreach($brojevi as $broj)
{
    $popust = izracunajPopust($broj);
    array_push($popusti,$popust);
}

$ukupanPopust = array_sum($popusti);
echo "Ukupan popust za danasnji dan je $ukupanPopust dinara";






?>