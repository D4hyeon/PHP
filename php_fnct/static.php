<?php
function inc01()
{
    $j = 1;
    print $j. "<br>";
    $j++;
}
for ($i = 0; $i < 10; $i++) 
{
    inc01();
}
print "<hr>";
function inc02()
{
    static $j = 1;  //　정적변수는 한번만 초기화 됨, 메모리에 상주
    print $j. "<br>";
    $j++;
}
for ($i = 0; $i < 10; $i++) 
{
    inc02();
}

?>