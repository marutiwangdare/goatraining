<!--
    PHP Math
PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
-->
<?php

//The pi() function returns the value of PI:

echo(pi()); // returns 3.1415926535898


//The min() and max() functions can be used to find the lowest or highest value in a list of arguments:


echo "</br> minimum = ".min(0, 150, 30, 20, 8, 200);  // returns 0

echo "</br> maximum = ".max(0, 150, 30, 20, 8, 200, 300);  // returns 200

//The abs() function returns the absolute (positive) value of a number:


echo "</br> abs(-6.7) = ".abs(-6.7);  // returns 6.7

//The sqrt() function returns the square root of a number:

echo "</br> sqrt(64) = ".sqrt(64);  // returns 8

//The round() function rounds a floating-point number to its nearest integer:

echo "</br> round(0.60) = ".round(0.60);  // returns 1
echo "</br> round(0.49) = ".round(0.49);  // returns 0

//The rand() function generates a random number:

echo "</br> rand() = ".rand();

/*
To get more control over the random number, you can add the optional min and max parameters 
    to specify the lowest integer and the highest integer to be returned.

For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):
*/

echo "</br> rand(10, 100) = ".rand(10, 100);
?>
