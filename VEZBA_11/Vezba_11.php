<?php

    $trailerDepartment = [
        "Djole","Ade","Mick"
    ];

    if(in_array("Djole",$trailerDepartment))
    {
        echo "Nasli smo ga";
    }

    $pronadjenClan = in_array("Djole", $trailerDepartment);
    if($pronadjenClan)
    {
        echo" Nasli smo djoleta";
    }
















?>