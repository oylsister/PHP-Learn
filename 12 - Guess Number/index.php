<?php
    $play_count = 0;
    $correct_guesses = 0;
    $guess_high = 0;
    $guess_low = 0;

    echo "Let's guess the number!\n";

    function guessNumber()
    {
        echo "Type number between 1 and 10.\n";
        global $play_count, $correct_guesses, $guess_high, $guess_low;

        $random_number = rand(1, 10);
        $display_play = $play_count + 1;

        echo("Current Round: $display_play. \n");
        echo("Correct Answer: $correct_guesses. \n");
        echo("Guess higher than answer: $guess_high. \n");
        echo("Guess lower than answer: $guess_low. \n");

        $answer = readline("Your number >> ");
        $number = (int)$answer;

        if($number == null)
            echo("This is not a number!");

        else if($number > 10)
            echo("Number can't be higher than 10!");

        else if($number < 1)
            echo("Number can't be lower than 1!");

        else
        {
            // add play count 
            $play_count++;

            if($number === $random_number)
            {
                echo("Nice one!\n");
                $correct_guesses++;
            }

            else if($number > $random_number)
            {
                echo("Too high!\n");
                $guess_high++;
            }

            else
            {
                echo("Too low!\n");
                $guess_low++;
            }
            echo("The number is: $random_number \n");
            echo("========================================== \n");
        }
    }
    
    while($play_count < 11)
    {
        guessNumber();
    }

    
?>