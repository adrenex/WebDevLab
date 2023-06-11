<?php
    $num = 10;
    $type = gettype($num);
    echo "Type of \$num: $type<br>";
    settype($num, 'string');
    $type = gettype($num);
    echo "Type of \$num after settype(): $type<br>";
    if (isset($num)) 
    {
        echo "\$num is set and not null<br>";
    } 
    else 
    {
        echo "\$num is not set or null<br>";
    }
    unset($num);
    if (isset($num)) 
    {
        echo "\$num is set and not null<br>";
    } 
    else 
    {
        echo "\$num is not set or null<br>";
    }
?>