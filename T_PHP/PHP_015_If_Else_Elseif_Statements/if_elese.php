

<!-- PHP 5 if...else...elseif Statements
Conditional statements are used to perform different actions based on different conditions.

PHP Conditional Statements
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif....else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed
PHP - The if Statement
The if statement executes some code if one condition is true.

Syntax
if (condition) {
    code to be executed if condition is true;
}
The example below will output "Have a good day!" if the current time (HOUR) is less than 20:

PHP - The if...else Statement
The if....else statement executes some code if a condition is true and another code if that condition is false.

Syntax
if (condition) {
    code to be executed if condition is true;
} else {
    code to be executed if condition is false;
}

PHP - The if...elseif....else Statement
The if....elseif...else statement executes different codes for more than two conditions.

Syntax
if (condition) {
    code to be executed if this condition is true;
} elseif (condition) {
    code to be executed if this condition is true;
} else {
    code to be executed if all conditions are false;
}
The example below will output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":

 -->
 
<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
echo "<br>";
?>

<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
?>
 
 <?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
?>

</body>
</html>
 
 
 
 