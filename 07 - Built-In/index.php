<?php
    echo("This works!\n");

    echo "This also works!\n";

    //echo("This would NOT work", "\n");

    echo "Buuuut!", " ", "This", " ", "does!", "\n";

    $first = "Welcome to the magical world of built-in functions.";
  
    $second = 82137012983; 

    // get type of variable 
    echo gettype($first) . "\n";
    echo gettype($second) . "\n";

    // variable length.
    var_dump($first);
    var_dump($second);

    // reverse the string
    echo strrev(".pu ti peeK .taerg gniod er'uoY");

    // lower case
    echo strtolower("SOON, tHiS WILL Look NoRmAL.");

    // repeat printing 3 times
    echo str_repeat("\nThere's no place like home.\n", 3);

    // finding how many word "really" are in $essay_one.
    echo substr_count($essay_one, "really");

    // finding how many word "obvious" are in $essay_one.
    echo substr_count($essay_two, "obvious"); // this is also result the one with "ly".

    function calculateDistance($start, $end)
    {
        // make absoulte number
        return abs($start - $end);
    }

    function calculateTip($meal)
    {
        $tips = round(($meal / 100) * 18);

        // make it round not decimal
        return round($meal + $tips); 
    }

    // get random max number
    echo getrandmax();
    echo "\n";

    // just get random number
    echo rand();
    echo "\n";

    // get random number between
    echo rand(1, 52);

    // str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] ) : string
    $a = 29;
    $b = "You did it!";
    $c = STR_PAD_BOTH;
    $d = "*~*";

    // should look like this
    echo str_pad("You did it!", 29, STR_PAD_BOTH, "*~*");
    echo str_pad($b, $a, $d, $c);

    function convertToShout($lowStr)
    {
        return strtoupper($lowStr) . "!";
    }

    $example = convertToShout("woah there, buddy");
    echo $example;

    function tipGenerously($meal)
    {
    $tips = ($meal / 100) * 20;

        return ceil($meal + $tips);
    }

    function calculateCircleArea($diameter)
    {
        return pi() * (($diameter / 2) ** 2);
    }

    echo calculateCircleArea(6);
?>
