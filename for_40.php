<!--
    The PHP for Loop
The for loop is used when you know in advance how many times the script should run.

Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

Parameters:

init counter: Initialize the loop counter value

test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. 
        If it evaluates to FALSE, the loop ends.

increment counter: Increases the loop counter value


Examples
The example below displays the numbers from 0 to 5:


Example Explained
$x = 0; - Initialize the loop counter ($x), and set the start value to 0
$x <= 5; - Continue the loop as long as $x is less than or equal to 5
$x++ - Increase the loop counter value by 1 for each iteration
-->

<?php
for ($x = 0; $x <= 5; $x++) {
  echo "The number is: $x <br>";
}

/*

 x
 0
 1
 2
 3
 4
 5
 6

 The number is: 0
 The number is: 1
 The number is: 2
 The number is: 3
 The number is: 4
 The number is: 5

 */

?>