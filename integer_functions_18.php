<!--
    PHP has the following functions to check if the type of a variable is integer:

is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()
-->
<?php

$x = 5985;

echo "<br> 5985=".is_int($x);

$x = 59.85;

echo "<br> 59.85=".is_int($x);

?>