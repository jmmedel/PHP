<!-- 
Loop Through an Indexed Array
To loop through and print all the values of an indexed array, you could use a for loop, like this:


 -->

<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++){
    echo  $cars[$x];
    echo "<br>";
}

?>

</body>
</html>