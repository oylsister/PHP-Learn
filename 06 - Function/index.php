<?php
    // simple function.
    function praisePHP()
    {
        echo "PHP is the computer language";
    }

    praisePHP();

    function inflateEgo()
    {
        echo "Hello, Newcomer!\n";
        echo "Hopefully you will be able to finish PHP Course!\n";
    }

    inflateEgo();
    inflateEgo();

    // Number stuff.
    function printStringReturnNumber()
    {
        echo "The Number is ";
        return 25;
    }

    $my_num = printStringReturnNumber();
    echo $my_num;

    // function that return string
    function first()
    {
        return "You did it!\n";
    }

    function second()
    {
        return "You're amazing!\n";
    }

    function third()
    {
        return "You're a coding hero!\n";
    }

    // simply use function on echo.
    echo first() . second() . third();

    // Parameters
    function increaseEnthusiasm($string)
    {
        return $string . "!";
    }

    echo increaseEnthusiasm("Cheers lad");

    function repeatThreeTimes($string)
    {
        return $string . $string . $string;
    }

    echo repeatThreeTimes("Nice one");

    // Parameter more than one
    function calculateArea($length, $width)
    {
        return $length * $width;
    }

    echo calculateArea(10, 8);

    function calculateVolume($height, $width, $depth)
    {
        return $height * $width * $depth;
    }

    echo calculateVolume(6, 6, 4);

    // Parameters with value
    function calculateTip($bill, $tip = 20)
    {
        return $bill + (($bill / 100) * $tip);
    }

    echo calculateTip(100);

    // Permanent change value
    $string_one = "you have teeth";
    $string_two = "toads are nice";
    $string_three = "brown is my favorite color";

    // add  & to change it permanently I don't know why but it need.
    function convertToQuestion(&$string)
    {
        $string = "Do you think " . $string . "?\n";
    }

    convertToQuestion($string_one);
    convertToQuestion($string_two);
    convertToQuestion($string_three);

    echo $string_one;
    echo $string_two;
    echo $string_three;

    // use global variable (stupid rule obviously)
    $language = "PHP";
    $topic = "scope";

    function generateLessonName($concept)
    {
        // to use $language variable outside the function.
        global $language;
        return $language . ": " . $concept;
    }

    echo generateLessonName($topic);
?>