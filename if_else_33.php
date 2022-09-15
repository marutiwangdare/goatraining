<!--
    PHP - The if...else Statement
The if...else statement executes some code if a condition is true and another code if that condition is false.

Syntax
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}
Example
Output "Have a good day!" if the  t is less than 20, and "Have a good night!" otherwise:


-->
<?php
$t = 1;

if ($t < 20) {
  echo "Have a good day!"; //if true
} else {
  echo "Have a good night!"; // if false
}