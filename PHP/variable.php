<?php
// Single Line comment
# Single line Comment
/*
multiline comment
*/

#Variable 
/*
-prefix $
-start with a letter or a underscore
- only letters, numbers and underscores
-case sensitive
*/
#Data Types
/*
    String 
    Integers
    Floats
    Booleans
    Arrays
    Objects
    Null
    REsource


*/

$output = "Hello world";
#----------------
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
# --------------
$float1 = 4.1;
$bool1 = true;
#---------------
$string1 = "Hello";
$string2 = "Guys";
$gretting = $string1 .' ' .$string2. '!';
$gretting2 = '$string1 $string2'; 
#Constant
define('GREETING','HElooo everyone');
 echo $output;
 echo $sum;
 echo $gretting;
 echo $gretting2;
 echo GREETING;
?>