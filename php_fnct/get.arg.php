<?php
function my_print(){
    $args = func_get_args();
    if(count($args) > 0){
        foreach($args as $arg){
            echo $arg."<br>";
        }
    }else{
    echo "no arguments";
    }
}
my_print();
my_print(1,2,3);
my_print("a","b","c");
my_print("apple","banana","cherry");

?>