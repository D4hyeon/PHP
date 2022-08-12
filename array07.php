<?php
$fruits = array(
    "Apple"  => "Red",
    "Pear"   => array("Brown", "Yellow"),
    "Peach"  => "Pink",
    "Tomato" => array("Red", "Green"),
    "Banana" => "Yellow"
    );
    $fruits1 = array(
        "Apple"  => "Red",
        "Pear"   => array("color1" => "Brown", "color2" => "Yellow"),
        "Peach"  => "Pink",
        "Tomato" => array("Red", "Green"),
        "Banana" => "Yellow"
        );
    print $fruits1["pear"]["color1"]."<br>";
    print $fruits1["Tomato"][0]."<br>";

    print "********BEFORE********<br>";
    print_r($fruits);
    print "<br><br>";
    print "********AFTER********<br>";
    unset($fruits["pear"], $fruits["Banana"],);
    print_r($fruits);
    print "<br><br>";
?>