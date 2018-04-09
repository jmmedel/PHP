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
	//Once we have a class, we can create MANY objects from it!

	//Here is an object
	$object1 = new NewClass;
	//Here we change the value of the property in our class
	$object1->setNewProperty("This is the new data in object 1");
	//And here we then echo the property
	echo $object1->getProperty();

	//Here is a second object
	$object2 = new NewClass;
	//Here we first echo the property
	echo $object2->getProperty();
	//THEN we change the value of the property in our class
	$object2->setNewProperty("This is the new data in object 2");
	//And here we then echo the new property
	echo $object2->getProperty();
?>
</body>
</html>
