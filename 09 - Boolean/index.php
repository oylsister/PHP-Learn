<?php
    namespace Oylsister;

    function markAnswer($is_correct)
    {
    if($is_correct)
    {
        return "green";
    }
    return "red";
    }

    print markAnswer(true);
    print markAnswer(false);

    function chooseCheckoutLane($goods)
    {
        if($goods > 12)
            return "regular lane";

        return "express lane";
    }

    function canIVote($ages)
    {
        if($ages >= 18)
            return "yes";

        return "no";
    }

    echo chooseCheckoutLane(15);
    echo chooseCheckoutLane(8);

    echo canIVote(25);
    echo canIVote(5);

    function agreeOrDisagree($strOne, $strTwo)
    {
    if($strOne === $strTwo)
        return "You agree!";

    else
        return "You disagree!";
    }

    echo agreeOrDisagree("lol", "lol") . "\n";
    echo agreeOrDisagree("lol", "dota2") . "\n";

    function checkRenewalMonth($renew_month)
    {
        // get the actuall date in month.
        $month = date("F");

        if($renew_month === $month)
            return "Time to renew";

        else
            return "Welcome!";
    }

    echo checkRenewalMonth("January") . "\n";
    echo checkRenewalMonth("July"); 

    // long as fuck

    function whatRelation($percent)
    {
        if($percent === 100)
            print("identical twins");

        else if($percent > 34)
            print("parent and child or full siblings");

        else if($percent > 13)
            print("grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings");

        else if($percent > 5)
            print("first cousins");

        else if($percent > 2)
            print("second cousins");

        else if($percent > 0)
            print("third cousins");

        else if(1 > $percent)
            print("not genetically related");
    }

    echo whatRelation(100) . "\n";
    echo whatRelation(40) . "\n";
    echo whatRelation(31) . "\n";
    echo whatRelation(8) . "\n";
    echo whatRelation(4) . "\n";
    echo whatRelation(1) . "\n";
    echo whatRelation(0) . "\n";

    // Switch case
    function airQuality($color)
    {
        switch ($color) {
            case "green" :
                echo "good";
                break;
            case "yellow" :
                echo "moderate";
                break;
            case "orange" :
                echo "unhealthy for sensitive groups";
                break;
            case "red" :
                echo "unhealthy";
                break;
            case "purple" :
                echo "very unhealthy";
                break;
            case "maroon" :
                echo "hazardous";
                break;
            default :
                echo "invalid color";
                break;
        }
    }

    echo airQuality("green");
    echo airQuality("blue");
    echo airQuality("red");
    echo airQuality("orange");

    function returnSeason($month)
    {
        // fall case for December will become winter.
        switch($month)
        {
            case "December":
            case "January":
            case "February":
                return "winter";

            case "March":
            case "April":
            case "May":
                return "spring";

            case "June":
            case "July":
            case "August":
                return "summer";

            case "September":
            case "October":
            case "November":
                return "fall";
        }
    }
?>