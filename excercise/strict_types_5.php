<?php declare(strict_types=1); // strict requirement

function display(string $arg)
{
    echo "<br>".$arg;
}

display("hello");
//display(10); //mismatch not allowed 
//display(2.5); //mismatch not allowed 

?>