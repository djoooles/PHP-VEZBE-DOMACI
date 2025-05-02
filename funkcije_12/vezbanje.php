<?php
function nizBrojeva($brojevi)
{
    foreach($brojevi as $broj)
    if($broj > 10)
    {
        echo $broj. "<br>";
    }
}
nizBrojeva([11,2,3,16,77,44,2,88]);



?>
