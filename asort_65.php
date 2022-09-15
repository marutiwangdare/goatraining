<!--
    Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value:
-->

<?php
$age = array("Peter"=>"35", "Joe"=>"43", "Ben"=>"37");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>