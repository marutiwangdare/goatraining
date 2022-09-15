<!--

PHP Assignment Operators
The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". It means that the left operand gets set 
to the value of the assignment expression on the right.


x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus

-->
<?php 
$x = 20;  
$y = 10;

$x += $y; // short for x = x + y;

echo "x += y : ".$x;

$x = 2;  
$y = 1;

$x -= $y; // short for x = x - y;

echo "</br> x -= y : ".$x;

$x = 3;  
$y = 10;

$x *= $y; // short for x = x * y;

echo "</br> x *= y : ".$x;

$x = 10;  
$y = 5;

$x /= $y; // short for x = x / y;

echo "</br> x /= y : ".$x;

$x = 10;  
$y = 5;

$x %= $y; // short for x = x % y;

echo "</br> x %= y : ".$x;


?>