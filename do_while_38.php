<!--
The PHP do...while Loop
The do...while loop will always execute the block of code once, it will then check the condition, 
and repeat the loop while the specified condition is true.

Syntax
do {
  code to be executed;
} while (condition is true);

Examples
The example below first sets a variable $x to 1 ($x = 1). 
Then, the do while loop will write some output, and then increment the variable $x with 1. 
Then the condition is checked (is $x less than, or equal to 5?), 
and the loop will continue to run as long as $x is less than, or equal to 5:

Example
-->
<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
/*

x
1
2
3
4
5
6

The number is: 1
The number is: 2
The number is: 3
The number is: 4
The number is: 5

*/
?>

