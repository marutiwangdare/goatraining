<!--We can also put a for loop inside another for loop to get the elements of the $cars array 
    (we still have to point to the two indices):

Example
-->

<?php

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15),
    array("Honda",7,5)
  );

for ($row = 0; $row < 5; $row++) {

  echo "<p><b>Row number $row</b></p>";
  

  for ($col = 0; $col < 3; $col++) {
    echo $cars[$row][$col].",  ";
  }

  echo "</br>";

}
/*

row     column
0        0   
         1 
         2 
         3 

1        0
         1 
         2 
         3 

2        0   
         1 
         2  
         3   

3        0 
         1 
         2  
         3

4

Row number 0
Volvo, 22, 18,

Row number 1
BMW, 15, 13,

Row number 2
Saab, 5, 2,

Row number 3
Land Rover, 17, 15,  




*/
?>