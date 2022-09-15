<!--
    The PHP is_numeric() function can be used to find whether a variable is numeric. 
    The function returns true if the variable is a number or a numeric string, false otherwise.
-->
<?php

$x = 5985;
echo "5985 = ".is_numeric($x);

$x = '5985';
echo "</br> '5985' = ".is_numeric($x);

$x = "Hello";
echo "</br> Hello = ".is_numeric($x);


$x = "59.85" + 100;
//var_dump(is_numeric($x));

?>