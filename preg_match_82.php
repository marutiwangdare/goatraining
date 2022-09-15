<!--
    The preg_match() function will tell you whether a string contains matches of a pattern.

    Returns 1 if the pattern was found in the string and 0 if not
    
Example
Use a regular expression to do a case-insensitive search for "w3schools" in a string:
-->
<?php
$str = "Visit W3Schools";

$pattern = "/w3schools/i";

$result = preg_match($pattern, $str); 

echo $result;
?>