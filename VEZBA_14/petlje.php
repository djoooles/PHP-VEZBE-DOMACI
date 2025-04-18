<?php
    
   $automobili = [
    "Audi" => "A4",
    "BMW" => "X1"
   ];

   foreach($automobili as $marka => $model)
   {
    echo "$marka $model Je bas dobar model,";
   }


   $osobe = [
    "Djole" => [
        "Ime" => "Djordje",
        "Prezime" => "Stojkovic",
        "Godine" => 25,
        "Grad" => "Nis",
        "Posao" => "Programer"
    ],
    "Mika" => [
        "Ime" => "Miljana",
        "Prezime" => "Milojkovic",
        "Godine" => 24,
        "Grad" => "Nis",
        "Posao" => "Accounting"
    ]
];

echo $osobe["Djole"]["Ime"];
echo $osobe['Djole']['Prezime'];
echo"<br>";

foreach($osobe as $ime => $osoba)
{
    $godine=  $osoba['Godine'];
    $prezime = $osoba['Prezime'];
    $puno_ime = $osoba['Ime'];
    $mesto = $osoba['Grad'];
    $posao = $osoba['Posao'];
    echo "Moje ime je $puno_ime $prezime i imam $godine godina, dolazim iz $mesto i radim kao $posao";
}











?>