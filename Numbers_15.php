<!--
    PHP Numbers
One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. 
Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.
-->
<?php 

$tx = "this is string"; //data type of tx is string

$tx = 10; // data type of tx is integer

?>