<?php
function fact($n)
{
    if($n == 1) 
        return 1;
    else 
        return $n*fact($n-1);    // recursive function
                                 // 재귀함수, 자기 호출함수
}

function fact_for($n){
    $factval  =1;
    for($i=1; $i<$n; $i++){
        $factval = $factval * $i;
    }
    return $factval;
}
print fact(150). "<br>";
print fact_for(5). "<br>";
?>