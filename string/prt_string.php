<?php
$str = "php 프로그래밍";
print $str. "<br>";
print $str[0];
print $str[1];
print $str[2];
print $str[3];
print $str[4];
print $str[5];
print $str[6]."<br>";
for($i = 0; $i < 10; $i++) {  
    print $str[$i];
}
print "<br><br>";
$str1 = "I'm a boy";
$str2 = "you are a man";
print $str1. "<br>";
print strtoupper($str1)."<br>";

print $str2. "<br>";
print strtolower($str2)."<br>";
?>