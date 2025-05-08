<?php

function obracunavanjePopusta($cena, $popust)
{
    $ukupniPopust = ($popust / 100) * $cena;
    return $ukupniPopust;
}

$pomnozeniBrojevi = obracunavanjePopusta(1500, 10);
echo $pomnozeniBrojevi;









?>