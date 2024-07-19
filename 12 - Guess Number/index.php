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

    function resultGuess()
    {
        global $play_count, $correct_guesses, $guess_high, $guess_low;
        echo("Finished!!\n");

        $percent_correct = number_format(($correct_guesses / $play_count) * 100, 2, '.', '');
        $percent_high = number_format(($guess_high / $play_count) * 100, 2, '.', '');
        $percent_low = number_format(($guess_low / $play_count) * 100, 2, '.', '');
        $total_wrong = $guess_high + $guess_low;
        // use number_format() for better way to do 2 decimal float
        $percent_wrong = number_format($percent_low + $percent_high, 2, '.', '');

        echo("You guessed correct for $correct_guesses ($percent_correct%) \n");
        echo("You guessed wrong for $total_wrong ($percent_wrong%) \n");
        echo("High guess: $guess_high ($percent_high%) Low guess: $guess_low ($percent_low%) \n");

        if($guess_high > $guess_low)
        echo("When you guessed wrong, you tend to guess high. \n");

        else if($guess_low > $guess_high)
        echo("When you guessed wrong, you tend to guess low. \n");
    }
    
    while($play_count < 10)
    {
        guessNumber();
    }
    resultGuess();
?>