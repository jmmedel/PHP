<!-- 
The PHP foreach Loop
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
foreach ($array as $value) {
    code to be executed;
}
For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

The following example demonstrates a loop that will output the values of the given array ($colors):

 -->
 
<!DOCTYPE html>
<html>
<body>

<?php  
$colors = array("red","green","blue","yellow");
foreach ($colors as $value)
{
    echo "$value <br>";
}
?>  

</body>
</html>