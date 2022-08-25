<?php
session_start();
//session_destroy();
session_destroy('apple');
print $_SESSION['apple']."<br>";
print $_SESSION['banana']."<br>";
print $_SESSION['cherry']."<br>";
?>
<a href="testDest.php">destroy function test</a>