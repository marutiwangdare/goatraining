<!--

PHP $_GET
PHP $_GET is a PHP super global variable which is used to collect form data after 
    submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.

Assume we have an HTML page that contains a hyperlink with parameters:



-->
<html>
<body>

<a href="test_get.php?name=raj & mobile=123">Test $GET</a>

<form method="post" action="test_get.php">
  Name: <input type="text" name="name">
  Mobile: <input type="text" name="mobile">
  <input type="submit">
</form>

</body>
</html>
