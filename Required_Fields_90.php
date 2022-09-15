<!--

This chapter shows how to make input fields required and create error messages if needed.

PHP - Required Fields
From the validation rules table on the previous page, 
we see that the "Name", "E-mail", and "Gender" fields are required. 
These fields cannot be empty and must be filled out in the HTML form.

Field	Validation Rules
Name	Required. + Must only contain letters and whitespace
E-mail	Required. + Must contain a valid email address (with @ and .)
Website	Optional. If present, it must contain a valid URL
Comment	Optional. Multi-line input field (textarea)
Gender	Required. Must select one
In the previous chapter, all input fields were optional.

In the following code we have added some new variables: $nameErr, $emailErr, $genderErr, and $websiteErr. 
These error variables will hold error messages for the required fields. 
We have also added an if else statement for each $_POST variable. 
This checks if the $_POST variable is empty (with the PHP empty() function). 
If it is empty, an error message is stored in the different error variables, and if it is not empty, 
it sends the user input data through the test_input() function:

-->


<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = "";
$nameErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
  }
 
}

?>

<?php
echo "<h2>Your Input:</h2>";
echo "name:".$name;

?>


<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>

  <br><br>
  <input type="submit" name="submit" value="Submit"> 
  
</form>



</body>
</html>