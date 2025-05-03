<?php
    function string($strings)
    {
        foreach($strings as $string)
            if(strpos($string, "a")!== false)
            {
                echo $string."<br>";
            }
        }
    string(["Miljana","Zorana","Jelena","Jovana"]);






?>