<!--
    PHP echo and print Statements

With PHP, there are two basic ways to get output: echo and print.


PHP echo and print Statements
echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. 
echo can take multiple parameters (although such usage is rare) while print can take one argument.
 echo is marginally faster than print.
-->
<?php

echo "Hello world!<br>";

print "Hello world!<br>";

echo "This ", "string ", "was ", "made ", "with multiple parameters.";

//print "this ","string";  // not allowed

?>