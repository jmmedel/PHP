<?php
	include 'includes/users.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//Here we add the property values to our objects as soon as we instantiate the class
	$users = new Users('John', 'Doe', 'Blond', 'Brown');
	$users2 = new Users('Daniel', 'Nielsen', 'Brown', 'Blue');
	
	echo $users2->fullName();
?>
</body>
</html>
