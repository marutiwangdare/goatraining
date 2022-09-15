<!--

Loop Through an Indexed Array
To loop through and print all the values of an indexed array, you could use a for loop, like this:

Example
-->

<?php
$cars = array("Volvo", "BMW", "Toyota","Honda");

$arrlength = count($cars); //4


for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

/*

arrlength
4

x  
0
1
2
3
4

Volvo
BMW
Toyota
Honda


*/

?>