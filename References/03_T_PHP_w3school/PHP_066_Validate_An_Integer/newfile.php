


<!--
 
Validate an Integer
The following example uses the
filter_var() function to check if 
the variable $int is an integer.
If $int is an integer, the output of the
code below will be: "Integer is valid". 
If $int is not an integer, the output will be:
"Integer is not valid":
  
 -->

 
 <!DOCTYPE html>
<html>
<body>

<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>

</body>
</html>

