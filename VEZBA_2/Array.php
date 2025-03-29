<?php                
                    //0\\      //1\\      //2\\
    $automobili = [" BMW."," Mercederes,"," Audi,"];
                               //3\\
    array_push($automobili, " Zastava,");

    echo "Prvi auto je $automobili[3]";
    echo "Drugi auto je  $automobili[1]";
    echo "Treci auto je $automobili[2]";
    echo "Poslednji auto je $automobili[0]";

    $broj_automobila = count($automobili);

    echo "Ukupno imamo $broj_automobila automobila";

    



?>