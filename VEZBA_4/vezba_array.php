<?php

$osobe = [

    "Djole" => [
        "Prezime" => "Stojkovic",
        "Ime" => "Djordje",
        "Posao" => "Programer"
    ],

    "Veljko" => [
        "Prezime" => "Stojkovic",
        "Godine" => 4,
        "Mesto rodjenja" => "Nis",
        "Ime" => "Veljko"
    ]
];

    $osobe ["Jelena"] = [
        "Prezime" => "Matic",
        "Godine" => "29",
        "Programer" => true,
        "Pravo ime" => "Jelena"

    ];

    echo "Ja sam {$osobe['Djole']['Ime']}, a prezivam se {$osobe['Djole']['Prezime']} , Zelim postati {$osobe['Djole']['Posao']} ";


    echo "Ja sam {$osobe['Veljko']['Ime']}, prezivam se {$osobe['Veljko']['Prezime']} imam {$osobe['Veljko']['Godine']} Godina i dolazim iz {$osobe['Veljko']['Mesto rodjenja']}'a ! ";


    echo "Ja se zovem {$osobe['Jelena']['Pravo ime']}, a prezivam se {$osobe["Jelena"]["Prezime"]}, imam {$osobe['Jelena']['Godine']} godina ! ";



?>

