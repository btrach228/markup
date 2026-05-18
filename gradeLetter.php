<?php
function gradeLetter(int $grade): string
{
    switch($grade){
        case $grade>=90:
            return "A";
        case $grade>=80:
            return "B";
        case $grade>=70:
            return "C";
        case $grade>=60:
            return "D";
        case $grade<60:
            return "F";
        default:
            return "F";
    }
}

var_dump(gradeLetter(95));//A
var_dump(gradeLetter(85));//B
var_dump(gradeLetter(75));//C
var_dump(gradeLetter(65));//D
var_dump(gradeLetter(55));//F
?>