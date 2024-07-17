<?php
    namespace Codecademy;

    echo "Hello, there. What's your first name?\n";

    // Add receiving input.
    $name = readline(">> ");

    $name_length = strlen($name);

    if($name_length > 8)
        echo "Hi, ${name}. That's a long name.";

    else if ($name_length > 3)
        echo "Hi, ${name}.";

    else
        echo "\nHi, ${name}. That's a short name.";
?>