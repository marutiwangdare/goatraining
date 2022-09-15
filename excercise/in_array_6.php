<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

if (in_array("cleveland", $people, TRUE))
  {
  echo "1Match found<br>";
  }
else
  {
  echo "1Match not found<br>";
  } 


if (in_array("Glenn",$people, TRUE))
  {
  echo "2Match found<br>";
  }
else
  {
  echo "2Match not found<br>";
  }



if (in_array("23",$people, TRUE))
  {
  echo "3Match found<br>";
  }
else
  {
  echo "3Match not found<br>";
  }

  if (in_array("23",$people))
  {
  echo "4Match found<br>";
  }
else
  {
  echo "4Match not found<br>";
  }
?>