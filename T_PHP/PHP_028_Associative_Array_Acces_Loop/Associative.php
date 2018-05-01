

<!--  

Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop, like this:

 -->
 
 <!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($age as $x => $x_value){
    echo "Key= " .$x. ", Value= ".$x_value;
    echo "<br>";
}
?>

</body>
</html>