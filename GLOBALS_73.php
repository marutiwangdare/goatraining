<!--

PHP also stores all global variables in an array called $GLOBALS[index]. 
The index holds the name of the variable. 
This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:

-->
<?php
$x = 5;


function myTest() {
  $GLOBALS['x']=20;
} 

myTest();

echo $x;
?>
