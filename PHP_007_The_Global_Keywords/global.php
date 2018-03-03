
<!-- 
PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):

 -->

<!DOCTYPE html>
<html>
<body>

<?php 
$x = 5;
$y = 10;
function myTest(){
    global $x,$y;
    $y = $x + $y;
}

myTest(); // run function
echo $y; //output the new value for variable $y
#----------------
$a = 5;
$b = 10;

function myTest2(){
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    
}
echo "<br>";
myTest2();
echo $y; // outputs 15

?>

<!-- 
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:

 -->
</body>
</html>
