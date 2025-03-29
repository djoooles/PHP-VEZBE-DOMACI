<?php

    $godinaRodjenja = 1999;
    $mesecRodjenja = 11;
    $danRodjenja = 16;

    $trenutaGodina = date("Y");
    $trenutniMesec = date("m");
    $trenutniDan = date("d");

    $godine = $trenutaGodina - $godinaRodjenja;
    
    if ($trenutniMesec < $mesecRodjenja |($trenutniMesec == $mesecRodjenja && $trenutniDan < $danRodjenja)) {
        echo "Rodjendan jos nije prosao, ";
        $godine--;
    } else {
        echo "Rođendan je već bio ili je danas!";
    }

    echo "Moj rodjendan jos uvek nije bio tako da imam $godine godina.";


?>