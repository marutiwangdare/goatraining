<!--

PHP Break
You have already seen the break statement used in an earlier chapter of this tutorial. 
It was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.

This example jumps out of the loop when x is equal to 3:

Example
-->
<?php
for ($x = 0; $x <= 5; $x++) {

  if ($x == 3) {
    break;
  }

  echo "The number is: $x <br>";
}
/*
x
0
1
2
3

The number is: 0
The number is: 1
The number is: 2

*/ 
?>