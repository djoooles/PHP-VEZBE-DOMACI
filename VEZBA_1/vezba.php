<?php
                //Troskovi\\

        $Kirija = 19550;
        $gym = 4000;
        $gorivo = 12000;
        $racun_za_telefon = 2200;
        $ostali_troskovi = 10000;

        $Kirija -= 2000;
        $gym -= 500;
        $gorivo += 3000;
        $racun_za_telefon += 3500;
        $ostali_troskovi -= 2000;

        $ukupni_mesecni_troskovi = $Kirija+$gym+$gorivo+$racun_za_telefon+$ostali_troskovi;

        echo "Cena kirije je $Kirija,
        clanarina teretane je $gym,
        gorivo za auto mesecno iznosi $gorivo, 
        $racun_za_telefon iznosi racun za telefon, 
        $ostali_troskovi su ostali troskovi,
        ukupni troskovi = $ukupni_mesecni_troskovi RSD";
    

    


?>