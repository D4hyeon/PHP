<?php
session_start();
foreach ($_SESSION['furits'] as $furit){
    print $furit. "<br>";
}
?>