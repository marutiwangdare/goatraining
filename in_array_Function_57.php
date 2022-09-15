<!--
    PHP in_array() Function

Definition and Usage
The in_array() function searches an array for a specific value.

Note: If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.

Syntax
in_array(search, array, type)
-->
<?php
$people = array("Ramesh", "Sachin", "Dhoni", "VIRAT", "20");

if (in_array("Ramesh", $people,true))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>