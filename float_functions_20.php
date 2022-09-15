<!--
    PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()
-->
<?php
$x = 10.365;
echo "10.365 = ".is_float($x);

$y = 10365;
echo "</br>10365 = ".is_float($y);
?>