<!-- 
PHP 5 Variables
Variables are "containers" for storing information.

Creating (Declaring) PHP Variables
In PHP, a variable starts with the $ sign, followed by the name of the variable:
 -->

<!DOCTYPE html>
<html>
<body>

<?php
$txt = "Hello World";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;

?>

</body>
</html>

<!-- 
After the execution of the statements above, the variable $txt will hold the value Hello world!, the variable $x will hold the value 5, and the variable $y will hold the value 10.5.

Note: When you assign a text value to a variable, put quotes around the value.

Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.
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

 -->