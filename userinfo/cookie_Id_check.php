<?php
$name = $_POST['name'];
if($name)
    $_COOKIE[$name] = $name;
    print "hello".$_COOKIE[$name]."!<br>";
    ?>