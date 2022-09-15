<!--

PHP is a Loosely Typed Language


PHP automatically associates a data type to the variable, depending on its value. 
Since the data types are not set in a strict sense, 
you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. 
This gives us an option to specify the expected data type when declaring a function, 


-->
<?php

function addNumberString( $a,  $b) {
    return $a + $b;
  }
  echo addNumberString(5, "10 days"); 

  echo "<br>";

  function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  //echo addNumbers(5, "5 days");// not allowed because second argument is string

  echo addNumbers(5, 10);

?>