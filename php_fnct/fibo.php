<?php
function fibo($n){
    if($n == 0 || $n == 1) 
    return $n;
    else 
    return (fibo ($n-1) + fibo ($n-2));

}
print fibo(0). "<br>";
print fibo(1). "<br>";
print fibo(2). "<br>";
print fibo(3). "<br>";
print fibo(4). "<br>";
print fibo(5). "<br>";
print fibo(40). "<br>";

?>