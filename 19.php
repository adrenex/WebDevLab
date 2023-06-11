<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $consumerNumber = $_POST['consumerNumber'];
        $consumerName = $_POST['consumerName'];
        $prevReading = $_POST['prevReading'];
        $presReading = $_POST['presReading'];
        $UnitsConsumed = $presReading - $prevReading;
        $rate;
        if($UnitsConsumed < 100)
        {
            $rate = 3;
        }
        else if($UnitsConsumed > 100 && $UnitsConsumed < 200)
        {
            $rate=4;
        }
        else if($UnitsConsumed > 200 && $UnitsConsumed < 300)
        {
            $rate = 5;
        }
        else
        {
            $rate = 6;
        }
        $amount = $UnitsConsumed * $rate;
    }
?>
