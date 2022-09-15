<?php

function add($num1,$num2)
{
    $sum = $num1 + $num2;
    echo "<br> addition of $num1 and $num2 is : ".$sum;
}

function multiply($num1,$num2)
{
    $result = $num1 * $num2;
    echo "<br> multiplication of $num1 and $num2 is : ".$result;
}

add(10,20);
add(100,200);

multiply(2,3);
multiply(100,2);
?>