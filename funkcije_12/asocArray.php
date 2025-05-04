<?php
    function osoba($podaci)
    {
        foreach($podaci as $podatak)
        {
            echo $podatak . "<br>";
        }
    }
    $niz = [
        "Djole" => 5,
        "Mika" => 10,
        "Veljko" => 15,
        "Pavle" => 20,
        "Darko" => 25
    ];
osoba($niz);
?>
