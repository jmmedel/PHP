<!--  

PHP Functions - Returning values
To let a function return a value, 
use the return statement: 

 -->


<!DOCTYPE html>
<html>
<body>

<?php

function sum($x,$y){
    $z = $x + $y;
    return  $z;
}

echo  "5 + 10 = " .sum(5, 10)."<br>";
echo  "7 + 13 = " .sum(7, 13)."<br>";
echo  "2 + 4  = " .sum(2, 4)."<br>";

?>

</body>
</html>
