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
	$object = new NewClass;

	//We can delete objects using the unset PHP function
	unset($object);
?>
</body>
</html>
