
<!-- 
PHP 5 Multidimensional Arrays
Earlier in this tutorial, we have described arrays that are a single list of key/value pairs.

However, sometimes you want to store values with more than one key.

This can be stored in multidimensional arrays.

PHP - Multidimensional Arrays
A multidimensional array is an array containing one or more arrays.

PHP understands multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

The dimension of an array indicates the number of indices you need to select an element.

For a two-dimensional array you need two indices to select an element
For a three-dimensional array you need three indices to select an element
PHP - Two-dimensional Arrays
A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).

First, take a look at the following table:

Name	Stock	Sold
Volvo	22	18
BMW	15	13
Saab	5	2
Land Rover	17	15
We can store the data from the table above in a two-dimensional array, like this:

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.

To get access to the elements of the $cars array we must point to the two indices (row and column):

 -->
 
 
<!DOCTYPE html>
<html>
<body>

<?php
$cars = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Volvo",5,2),
    array("Volvo",17,15),  
);

echo $cars[0][0].": In Stock : " .$cars[0][1].",sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In Stock : " .$cars[1][1].",sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In Stock : " .$cars[2][1].",sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In Stock : " .$cars[3][1].",sold: ".$cars[3][2].".<br>";



?>

</body>
</html>

