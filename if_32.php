<!--
    PHP - The if Statement
The if statement executes some code if one condition is true.

Syntax
if (condition) {
  code to be executed if condition is true;
}

Example
Output "Have a good day!" if the  t is less than 20:


-->
<?php
$t = 2;

if ($t < 20) {
  echo "first Have a good day!";
}

$t = 30;

if ($t < 20) {
  echo "</br>second Have a good day!";
}

$t = 30;

if ($t > 20) {
  echo "</br>third Have a good day!";
}