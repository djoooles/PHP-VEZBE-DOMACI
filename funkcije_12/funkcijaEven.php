<?php

function proveraBrojeva()
{
    $brojevi = [13,110,3,77,5,8];
foreach($brojevi as $broj)
if($broj % 2 == 0)
{
    echo "Broj je paran!"."<br>";
}
elseif($broj % 2 == 1)
{
    echo "Broj je neparan"."<br>";
}
}
proveraBrojeva();








?>