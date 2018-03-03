
<!-- 

What is an Array?
An array is a special variable, which can hold more than one value at a time.

If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:

$cars1 = "Volvo";
$cars2 = "BMW";
$cars3 = "Toyota";
However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

The solution is to create an array!

An array can hold many values under a single name, and you can access the values by referring to an index number.
Create an Array in PHP
In PHP, the array() function is used to create an array:

array();
In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");
or the index can be assigned manually:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
The following example creates an indexed array named $cars, assigns three elements to it, and then prints a text containing the array values:
 -->


<!DOCTYPE html>
<html>
<body>

<?php

$cars = array("Volvo","BMW","Toyota");
echo  "I like ".$car[0] . ", " .$cars[1] ." and" .$cars[2].".";
echo "<br>";
#Get The Length of an Array - The count() Function
#The count() function is used to return the length (the number of elements) of an array:
#
echo  count($cars);



?>

</body>
</html>