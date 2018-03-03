<!-- 
Output Variables
The PHP echo statement is often used to output data to the screen.

The following example will show how to output text and a variable:
 -->

<!DOCTYPE html>
<html>
<body>

<?php 

$txt = "Hello World";
echo "I Love $txt";
echo "<br>";
# The following example will produce the same output as the example above:
$txt1 = "Hello World";
echo "I Love" .$txt1. "!";
echo "<br>";
#The following example will output the sum of two variables:
$x = 5;
$y = 4;
echo $x + $y;
echo "<br>";


?>

</body>
</html>

<!-- 
Note: You will learn more about the echo statement and how to output data to the screen in the next chapter.

PHP is a Loosely Typed Language
In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically converts the variable to the correct data type, depending on its value.

In other languages such as C, C++, and Java, the programmer must declare the name and type of the variable before using it.

 -->