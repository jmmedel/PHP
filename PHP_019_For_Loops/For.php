<!-- 
PHP 5 for Loops
PHP for loops execute a block of code a specified number of times.

The PHP for Loop
The for loop is used when you know in advance how many times the script should run.

Syntax
for (init counter; test counter; increment counter) {
    code to be executed;
}
Parameters:

init counter: Initialize the loop counter value
test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
increment counter: Increases the loop counter value
The example below displays the numbers from 0 to 10:

 -->
 
 <!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>  

</body>
</html>
