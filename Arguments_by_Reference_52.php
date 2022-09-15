<?php
function add(&$val1, $val2) {
  $val1 += 5;
  $val2 += 10;
}

$num1 = 2;
$num2 = 2;

add($num1,$num2);

echo "num1: ".$num1;

echo "</br>";

echo "num2: ".$num2;
?>