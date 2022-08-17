<?php
function my_log($param, $base=2) // default parameters
{
    $result = log($param) / log($base);
    return $result;

}
print my_log(8,2)."<br/>";
print my_log(8)."<br/>";
print my_log(9,3)."<br/>";
print my_log(1024)."<br/>";
?>