<?php
// assign number
    // subtact
    $last_month = 1187.23;
    $this_month = 1089.98;

    echo $last_month - $this_month;

    // number
    $num_languages = 4;
    $months = 11;
    $days = $months * 16;
    $days_per_language = $days / $num_languages;

    echo $days_per_language;

    // ยกกำลัง
    echo 8 ** 2;
    
    // We have 82 students going on a class trip. We want to divide the students into groups of 6. how many students will be left without groups.
    echo 82 % 6; // 4

    // ยาวเท่าไหร่ก็ได้
    echo 94 - 4.25 + 7 - (23.5 + ((23.5 / 100)) * 20) + (20 / 4); 

    // += stuff
    $my_num = 200;
    $answer = $my_num;
    $answer += 2;
    $answer *= 2;
    $answer -= 2;
    $answer /= 2;
    $answer -= $my_num;

    echo $answer;
  

