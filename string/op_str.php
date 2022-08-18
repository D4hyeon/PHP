<?php
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$str0 = "01234567890123456789012345678901234567890";
print $str."<br>";

$str1 = strrev($str);
print $str1."<br>";

print $str."<br>";
print $str0 ."<br>";
print substr($str,2,5)."<br>";
print substr($str,8,5)."<br>";
print substr($str,12,8)."<br>";
print substr($str,-9,8)."<br>";

$fruits = " apple banana pear ";

$str3 = chop($fruits);
print "start-" . $str3 . "-end<br>\n";
$str4 = rtrim($fruits);
print "start-" . $str4 . "-end<br>\n";
$str5 = ltrim($fruits);
print "start-" . $str5 . "-end<br>\n";
$str6 = trim($fruits);
print "start-" . $str6 . "-end<br>\n";
?>