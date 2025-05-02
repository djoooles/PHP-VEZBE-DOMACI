<?php

    function RacunanjeBroja($prviBroj, $drugiBroj)
    {
        if($prviBroj == 0 || $drugiBroj == 0)
        die("Ne sme biti 0");
        echo $prviBroj + $drugiBroj;
    }
    RacunanjeBroja(2,5);






?>
