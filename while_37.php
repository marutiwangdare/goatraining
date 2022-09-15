<!--
    The PHP while Loop
The while loop executes a block of code as long as the specified condition is true.

Syntax
while (condition is true) {
  code to be executed;
}

Examples
The example below displays the numbers from 1 to 5:

Example

Example Explained
$x = 1; - Initialize the loop counter ($x), and set the start value to 1
$x <= 5 - Continue the loop as long as $x is less than or equal to 5
$x++; - Increase the loop counter value by 1 for each iteration
-->

<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

/*
x
1
2
3
4
5
6

The number is : 1
The number is : 2
The number is : 3
The number is : 4
The number is : 5



*/
?>