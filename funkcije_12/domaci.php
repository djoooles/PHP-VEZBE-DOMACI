<?php
    function izracunajPDV($broj)
    {
    if(!is_numeric($broj)|| $broj < 1)
    {
        die("Broj mora biti numericka vrednost i broj ne moze biti manji od 1");
    }    
    elseif($zbir = $broj * 1.22)
    {
        echo"PDV iznosi:  $zbir EUR";
    }
    }
    izracunajPDV(5);
    


?>