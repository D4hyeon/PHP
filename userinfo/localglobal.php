<?php
function A (){
    global $n;  // 
    $n = "A";
    $m = "M";
    print "$n, $m <br>";
}

$n = "M";
$m = "Money";
a();
print "$n, $m <br>";
?>