<?php
    // octal format is one quote '', while two quote is string "".
    $initial = '555';

    // turn octal in to decimal, this will not return to 555 but something else
    $a = octdec($initial);
    // echo $a;

    // degree to radians
    $b = deg2rad($a);
    // echo $b; 

    //use cosine function
    $c = cos($b);
    // echo $c;

    // round to 3 decimal place
    $d = round($c, 3);
    //echo $d;

    // log
    $e = log($d);
    // echo $e;

    // absoulute
    $f = abs($e);
    // echo $f;

    // arc cosine
    $g = acos($f);
    // echo $g;

    // Radian back to degree
    $h = rad2deg($g);
    // echo $h;

    // round down
    $i = floor($h);
    // echo $i;

    // subtract
    $j = $i - 47;
    echo $j;
?>