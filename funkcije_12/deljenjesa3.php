<?php
    function deljenje($brojevi)
    {
    foreach($brojevi as $broj)
    if($broj % 3 == 0)
    {
        echo $broj . "<br>";
    }
    } 
    $niz = [9,33,30,91,76,18];

    deljenje($niz);



?>