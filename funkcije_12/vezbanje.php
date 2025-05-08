<?php

function obracunavanjePopusta($cena, $popust)
{
    $ukupniPopust = ($popust / 100) * $cena;
    return $ukupniPopust;
}

$obracunatiPopust = obracunavanjePopusta(1500, 10);
echo $obracunatiPopust;









?>
