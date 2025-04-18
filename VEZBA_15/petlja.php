<?php 

    $automobili = [
        "Zastava" => [
            "Model" => "Yugo 55",
            "Godiste" => 1995
        ],
        "Renault" => [
            "Model" => "Megane RS",
            "Godiste" => 2014
        ],
        "Toyota" => [
            "Model" => "Rav4",
            "Godiste" => 2021
        ],
    ];

    $trenutnaGodina = date("Y");
    foreach($automobili as $kljuc => $vrendost)
    {

    $model = $vrendost['Model'];
    $godiste = $vrendost['Godiste'];
    $godinaAuta = $trenutnaGodina - $godiste;

    if ($godinaAuta <= 5)
    {
        echo"Nov Auto";
    }

    elseif($godinaAuta > 5 && $godinaAuta < 12)
    {
        echo "Noviji Auto";
    }

    elseif($godinaAuta > 10 && $godinaAuta < 31)
    {
        echo "Auto je oldtimer";
    }
    
    }














?>