<!--

PHP String Functions
In this chapter we will look at some commonly used functions to manipulate strings.


-->

<?php

// strlen() - Return the Length of a String

echo strlen("Hello world!"); // outputs 12


echo "<br>";

//str_word_count() - Count Words in a String

echo str_word_count("Hello world!"); // outputs 2

echo "<br>";

//strrev() - Reverse a String

echo strrev("Hello world!"); // outputs !dlrow olleH

echo "<br>";

//strpos() - Search For a Text Within a String
/*
The PHP strpos() function searches for a specific text within a string. If a match is found, 
the function returns the character position of the first match. If no match is found, it will return FALSE.
*/

echo strpos("ramesh nalluri", "nalluri"); 

echo "<br>";

//str_replace() function replaces some characters with some other characters in a string.


echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

?>

