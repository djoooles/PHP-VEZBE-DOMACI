<?php
    function godine($godine)
    {
    foreach($godine as $godina)
    if($godina < 2000)
    {
        echo $godina . "<br>";
    }
    }
    godine([2001,1999,1998,2004,2006,1998,2993,1389]);



?>