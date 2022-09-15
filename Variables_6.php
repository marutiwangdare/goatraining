<!--

Think of variables as containers for storing data.

PHP Variables
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
Remember that PHP variable names are case-sensitive!



Output Variables
The PHP echo statement is often used to output data to the screen.

The following example will show how to output text and a variable:

-->
<?php

    $txt = "goa traing company";

    echo "I love $txt!";

    echo "</br>I love " . $txt . "!";

?>