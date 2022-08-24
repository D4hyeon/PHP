<?php
$filep = fopen("./romeo.txt", "w"); //w는 파일내용 지우고 덮어씀
if(!$filep)die("Error". $filep);

fputs ($filep,"RMEO : I take thee at thy word:
Call me but love, and I'll be new baptized;
Henceforth I never will be Romeo.");

fclose($filep);

$filep = fopen ("romeo.txt", "r");
if(!$filep)die("Error". $filep);

while($lien = fgets($filep, 1024)){
    print $line . "<br>";
}
fclose($filep);
?>