<?php
	//When we want to use a class, we need to include it at the top of our document
	include 'includes/parentclass.inc.php';
	include 'includes/newclass.inc.php';

	//Notice that we can also instantiate a class in our page files as well
	$object = new NewClass;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//After creating an object, we can access its content by refering to the object, followed by an arrow and the property or method we want to access
	echo $object->name();
?>
</body>
</html>
