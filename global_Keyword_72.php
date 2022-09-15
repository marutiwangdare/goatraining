<!--

PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):

-->

<?php
$x = 5;


function myTest() {
  global $x; 
  $x = 20;
} 

myTest();  // run function

echo $x; // output the new value for variable $x
?>