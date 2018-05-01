
<!-- 
PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:


 -->

 <!DOCTYPE html>
<html>
<body>

<?php
function myTest(){
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();

?> 
<!-- 
Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

Note: The variable is still local to the function.
 -->
</body>
</html>