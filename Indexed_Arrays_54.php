<!--

PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");

or the index can be assigned manually:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

The following example creates an indexed array named $cars, 
assigns three elements to it, and then prints a text containing the array values:

-->
<?php 

$cars = array("Volvo", "BMW", "Toyota");


echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";



?>