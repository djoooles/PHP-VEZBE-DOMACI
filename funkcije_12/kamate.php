<?php

function racunanjeKamate($kredit, $godina)
{
    $kamata = 0;
    if($godina < 2000)
    {
        $kamata = 0.05;
    }
    else if($godina >= 2000 && $godina <= 2010)
    {
        $kamata = 0.08;
    }
    else if($godina >= 2011 && $godina <= 2020)
    {
        $kamata = 0.1;
    }
    else if ($godina >= 2020)
    $kamata = 0.14;
    return $kredit*$kamata;
}
$kreditepre2000 = racunanjeKamate(1000,1984);
echo $kreditepre2000 . "<br>";

$kredit2000 = racunanjeKamate(10000, 2000);
echo $kredit2000 ."<br>";

$kreditdo2020 = racunanjeKamate(20000,2014);
echo $kreditdo2020. "<br>";

$kreditod2020 = racunanjeKamate(30000,2025);
echo $kreditod2020."<br>";

$ukupaniznos = $kreditepre2000 + $kredit2000 + $kreditdo2020 + $kreditod2020;
echo "Ukupan iznos kredita je: ". $ukupaniznos ."<br>";


















?>