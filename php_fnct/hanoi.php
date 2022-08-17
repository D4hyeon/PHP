<?php
function hanoi($n, $from, $via, $to)
{
    if($n == 1)
    print "move disc $n from $from to $to <br>";
    else
    {
        hanoi($n -1, $from, $to, $via);
        print " move disc $n from $from to $to <br>";
        hanoi($n-1, $via, $from, $to);
    }
}
hanoi(34, "a", "b", "c");
?>