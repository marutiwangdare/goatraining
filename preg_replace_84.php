<!--
    Using preg_replace()
The preg_replace() function will replace all of the matches of the pattern in a string with another string.

Example
Use a case-insensitive regular expression to replace Microsoft with W3Schools in a string:
-->

<?php
$str = "Visit Microsoft!";

$pattern = "/microsoft/i";

$result = preg_replace($pattern, "W3Schools", $str);

echo $result;
?>