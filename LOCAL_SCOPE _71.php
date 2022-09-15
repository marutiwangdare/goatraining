<!--
    A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:


    You can have local variables with the same name in different functions, 
    because local variables are only recognized by the function in which they are declared.
-->
<?php
$x = 20;

function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside myTest function is: $x</p>";
} 

function myDemo() {
    $x = 10; // local scope
    echo "<p>Variable x inside myDemo function is: $x</p>";
} 

//echo $x;

myTest();

myDemo();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>