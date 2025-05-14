<?php
    
    
    
    function izracunajDostavu($cena,$grad)
    {   
        $cenaDostave = 0;
        $dostava = [
            "Novi Sad" => 0, //Hteo sam malo dodati nesto nadam se da je okej
            "Subotica" => 220,
            "Pancevo" => 10,
            "Sarajevo" => 292,
            "Split" => 799,
            "Istanbul" => 954
        ];

        $gradPostoji = array_key_exists($grad, $dostava);
        if($grad == "Novi Sad")
        {
            return "0 RSD";
        };
        

        if($gradPostoji)
        {
            $rastojanje = $dostava[$grad];
            
            if($rastojanje <= 100)
            {
                $cenaDostave = 200;
            }
            elseif($rastojanje > 100 && $rastojanje <= 200)
            {
                $cenaDostave = 350;
            }
            elseif($rastojanje >= 500 && $rastojanje <900)
            {
                $cenaDostave = 500;
            }
            elseif($rastojanje > 900)
            {
                $cenaDostave = 1000;
            }
        }
        else
        {
            $cenaDostave = null;
        }

        return $cenaDostave;
    }
    $sarajevo = izracunajDostavu(2000,"Split");
    echo $sarajevo. "<br>";

    $noviSad = izracunajDostavu(2000,"Novi Sad");
    echo $noviSad. "<br>";
    
    $istanbul = izracunajDostavu(2000,"Istanbul");
    echo $istanbul. "<br>";

    $noviSad = izracunajDostavu(2000,"Novi Sad");
    echo $noviSad. "<br>";























?>