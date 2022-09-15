<!--

Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop, 
like this:

Example


-->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43", "Ramesh"=>"21");

foreach($age as $x => $x_value) {

  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";

}

/*
x       x_value
Peter   35
Ben     37
Joe     43


Key=Peter, Value=35
Key=Ben, Value=37
Key=Joe, Value=43



*/
?>