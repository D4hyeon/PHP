<?php
$fileop = fopen("./juliette.txt", "r");
if(!$fileop)die("could not open file");

while($line = fgets($fileop, 17))
{
    print $line. "<br>";
}
fclose($fileop);
?>