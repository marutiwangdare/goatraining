<?php declare(strict_types=1); // strict requirement?>
<!--
  PHP Return Type Declarations
PHP 7 also supports Type Declarations for the return statement. 
Like with the type declaration for function arguments, 
by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

To declare a type for the function return, add a colon ( : ) and 
    the type right before the opening curly ( { )bracket when declaring the function.

In the following example we specify the return type for the function:

-->
<?php 
function showNum(int $a) : int{
    return $a ;
  }
  echo showNum(10);

  /*
function showNum(int $a) : string {
  return $a;
}
echo showNum(1);
*/
?>