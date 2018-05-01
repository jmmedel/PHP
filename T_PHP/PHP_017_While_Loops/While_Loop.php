
<!--  
PHP 5 while Loops
PHP while loops execute a block of code while the specified condition is true.

PHP Loops
Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.

In PHP, we have the following looping statements:

while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array
The PHP while Loop
The while loop executes a block of code as long as the specified condition is true.

Syntax
while (condition is true) {
    code to be executed;
}
The example below first sets a variable $x to 1 ($x = 1). Then, the while loop will continue to run as long as $x is less than, or equal to 5 ($x <= 5). $x will increase by 1 each time the loop runs ($x++):

-->

<!DOCTYPE html>
<html>
<body>

<?php  
$x = 1;
while ($x <= 5)
{
    echo "The number is :$x <br>";
    $x++;
}

?>  

</body>
</html>
