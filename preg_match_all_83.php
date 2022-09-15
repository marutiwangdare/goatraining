<!--
Returns the number of times the pattern was found in the string, which may also be 0

Use a regular expression to do a case-insensitive count of the number of occurrences of "ain" in a string:
-->

<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>