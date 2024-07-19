<?php
// Write your code below:

    $first_array = array("a", 2, "r", 3, "e");

    echo count($first_array);

    $with_function = array("PHP", "popcorn", 555.55);

    // instead of using array() every time. use [] instead.
    $with_short = ["PHP", "popcorn", 555.55];

    $message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];

    $favorite_nums = [7, 201, 33, 88, 91];

    // combine all array string with ! as the space.
    echo implode("!", $message);

    // Print array list.
    print_r($favorite_nums);
?>