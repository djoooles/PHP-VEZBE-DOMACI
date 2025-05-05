<?php


function ispisivanje($imena)
{
foreach($imena as $ime)
if(ctype_upper($ime[0]))
{
    echo $ime. "<br>";
}
}
$nizImena = ["Djordje","miljana","Jelena","Darko","Veljko","pavle"];
ispisivanje($nizImena);


?>