<?php 
$about_me = [
    "name" => "Aisle Nevertell",
    "birth_year" => 1902,
    "favorite_food" => "pizza"
];

function calculateAge ($person_arr){
    $current_year = date("Y");
    $age = $current_year - $person_arr["birth_year"];
    return $age;
}

// closing tag when you gonna insert html on next line.
?>

<!--- HTML that you want to use. --->
<h1>Welcome!</h1>
<h2>About me:</h2>

<?php
    // they can access even they are not in the same tag.
    $name = $about_me["name"];
    echo "<h3>Name: $name</h3>";

    $age = calculateAge($about_me);
    echo "<p>Age: $age</p>";

    $food = $about_me["favorite_food"];
    echo "<div>Favorite Food: $food</div>"
?>

<h2>Now tell me a little about you.</h2>

<h1>Only Shoes Shoe Shop</h1>
<?php
    // { open.
    for ($i = 0; $i < 5; $i++) {
?>
    <!--- This get print five time --->
    <p>We sell shoes</p>
<?php
    // } close.
    }
?>

<h1>Only Shoes Shoe Shop</h1>
<?php
    // : open
    for ($i = 0; $i < 5; $i++):
?>
    <!--- This get print five time --->
    <p>We sell shoes</p>
<?php
    // stop loop for.
    endfor;
?>

<h1>Shoe Shop</h1>
<?php
    $footwear = [
        "sandals" => 4,
        "sneakers" => 7,
        "boots" => 3
    ];
?>
<p>Our footwear:</p>
<?php
    foreach ($footwear as $type => $brands):
?>
    <!--- < ?= is the shortcut for echo --->
    <p>We sell <?=$brands?> brands of <?=$type?></p>
<?php
    endforeach;
?>

