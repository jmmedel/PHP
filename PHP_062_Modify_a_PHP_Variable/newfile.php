


<!-- 

Modify a PHP Session Variable
To change a session variable, just overwrite it:

 -->
 
 
 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it 
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>