<?php

function proverabroja($broj)
{
    $rezultat = $broj % 2;
    if($broj == 0)
    echo "ne sme biti 0";
    else
    {
        if($rezultat == 1)
        {
        echo "Broj je neparan";
        }
    else
        {
        echo "Broj je paran";
        }
    }
    
}
proverabroja(0);
proverabroja(22);
proverabroja(23);




?>