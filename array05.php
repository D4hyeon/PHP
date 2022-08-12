<?php
$ABC = array("Computer", "Math","physics", "Misic","Electronics");

$DEF = array(
    "David" => "Computer",
    "Alice" => "Math",
    "Elsa" => "physics",
    "Bob" => "Misic",
    "chris" => array("Electronics", "statiatics")
);

print $ABC[0]. "<br>";
print $ABC[1]. "<br>";
print $DEF["David"]. "<br>";
print $DEF["chris"][0]. "<br>";

$DEF["ko"] = "History";
print_r($DEF);
unset($DEF["ko"]);
print_r($DEF);
print "<hr>";

?>
