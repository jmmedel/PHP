<?php
	include 'includes/newclass.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//Static properties or methods can be accessed using the following code
	//Static content in the class are constant, and if they are changed then they change in all objects as well
	echo NewClass::staticMethod();
?>
</body>
</html>
