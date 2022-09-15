<!--

PHP Continue
The continue statement breaks one iteration (in the loop), if a specified condition occurs,
 and continues with the next iteration in the loop.

This example skips the value of 3:

Example

-->
<?php
for ($x = 0; $x <=5 ; $x++) {

  if ($x == 4) {
    continue;
  }

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
The number is: 4
The number is: 5

*/