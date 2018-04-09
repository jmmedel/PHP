<?php

//Here we include the Calc class so we can access it
include 'includes/calc.inc.php';

//Here we get the values from the form
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

//We then pass the values to our calculator using a new object
$calculator = new Calc($num1, $num2, $cal);

//Then we echo the result using a method in the Calc class
echo $calculator->calcMethod();
