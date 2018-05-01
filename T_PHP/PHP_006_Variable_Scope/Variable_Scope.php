
<!-- 
PHP Variables Scope
In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global
static

Global and Local Scope
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
 -->
 
 
<!DOCTYPE html>
<html>
<body>

<?php 
$x = 5; // global scope
function  myTest(){
    // using x inside this function will generate an error
    echo "<p>Variable x inside function os $x </p>";
    
}
myTest();
echo "<p>Variable x outside function is: $x </p>";

#--------------------------
function myTest2(){
    $y= 5; // local scope
    echo "<p> Variable y inside function will generate an error";
    
}
myTest2();

// using y outside the function will generate an error 
// you cant use y in the echo 
echo "<p>Variable y outside function is: $y</p>"

?>

</body>
</html>
<!-- 
A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.
 -->
