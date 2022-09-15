<!--
    <=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, 
    depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
-->
<?php
$x = 5;  
$y = 10;


echo "$x <=> $y : ".( $x <=> $y); // returns -1 because $x is less than $y


$x = 10;  
$y = 10;

echo "<br>";
echo "$x <=> $y : ". ($x <=> $y); // returns 0 because values are equal


$x = 15;  
$y = 10;

echo "<br>";
echo "$x <=> $y : ". ($x <=> $y); // returns +1 because $x is greater than $y

$a=2;
$b=3;

echo "<br>";
echo "$a <=> $b : ". ($a <=> $b);

$a=20;
$b=3;

echo "<br>";
echo "$a <=> $b : ". ($a <=> $b);

$a=20;
$b=20;

echo "<br>";
echo "$a <=> $b : ". ($a <=> $b);
?>  

