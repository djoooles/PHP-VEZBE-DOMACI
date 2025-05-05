<?php
function ispisivanje($cenovnik)
{
foreach($cenovnik as $cena)
if($cena > 50)
{
    echo $cena;
}
}
$nizCena = [
    "mleko" => 196,
    "hleba" => 110,
    "jogurt" => 51,
    "kecap" => 48,
    "majonez" => 49
];
ispisivanje($nizCena);





?>