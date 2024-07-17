<?php
// Write your code below:

// assign variable start with $
$message = "Hello there!"; 
$biography = "\nAnimal!";

// also appliable when combine string.
$favorite_food = "\n" . "tur" . "duck" . "en";

// print the variable.
$name = "James";
$language = "C#";

echo "My name is " . $name;
echo "\nI'm currently learning " . $language;

$noun = "___";
$adjective = "___";
$verb = "___";

// apply between string.
echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";

// same as C# 
echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";

// Variable changes.
$movie = "Matrix";
// Add your code here:
  $old_favorite = $movie;
  echo "I'm a fickle person, my favorite movie used to be $movie.";
  
// Add a statement here:
  $movie = "John Wick";
  
  echo "\nBut now my favorite is $movie.";
  
// Add a statement below:
  echo "\n${old_favorite}";


// same as *=, +=, -=
echo "I'm going on a picnic!";

$sentence = "\nI'm going on a picnic, and I'm taking apples";
$sentence .= ", bee"; 
$sentence .= ", cat";

echo $sentence; 

/* Imagine a lot of code here */  
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
  // copy basically
  $order =& $very_bad_unclear_name;

  $order .= ", 3 rice bowl"; 
  // Don't change the line below
  echo "\nYour order is: $order.";