<?php
function checkEven(int $num): string
{
    if($num%2===0){
        return "even";
    }else{
        return "odd";
    }
}

var_dump(checkEven(1));//odd
var_dump(checkEven(2));//even

?>