<!--

Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. 
This means that the do...while loop will execute its statements at least once, even if the condition is false.
 See example below.

This example sets the $x variable to 6, then it runs the loop, and then the condition is checked:

Example

-->

<?php
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

/*
while ($x <= 5)
{
    echo "The number is: $x <br>";
    $x++;
}
*/



