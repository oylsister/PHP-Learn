<?php
    $riel = 2103942;
    $kyat = 19092;
    $krones = 109;
    $lek = 9094; 

    echo $riel;
    echo "\n$kyat";
    echo "\n$krones";
    echo "\n$lek";

    $riel_to_usd = 0.00026;
    $kyat_to_usd = 0.00066;
    $krones_to_usd = 0.11;
    $lek_to_usd = 0.0090;

    $usd_to_riel = $riel * $riel_to_usd - 1;
    $usd_to_kyat = $kyat * $kyat_to_usd - 1;
    $usd_to_krones = $krones * $krones_to_usd - 1;
    $usd_to_lek = $lek * $lek_to_usd - 1;

    echo "\n" . $usd_to_riel;
    echo "\n" . $usd_to_kyat;
    echo "\n" . $usd_to_krones;
    echo "\n" . $usd_to_lek;

    $final_amount = $usd_to_riel + $usd_to_kyat + $usd_to_krones + $usd_to_lek;

    // get a dollar without cent
    $dollars_only = $final_amount % 1000000000;

    // try to get 2 pos decimal
    $change = $final_amount - $dollars_only; // result = 0.46163999999999

    // bring .46 to front
    $rounded_change = $change * 100;

    // modulo them
    $rounded_change %= 100;

    // put them back to position they were.
    $rounded_change /= 100;

    // combine each other.
    $final_amount = $dollars_only + $rounded_change;

    echo "\n" . $final_amount;
?>

