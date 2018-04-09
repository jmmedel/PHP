<?php
	//Here we include all the class files
	//The order DOES matter
	include 'includes/dbh.inc.php';
	include 'includes/users.inc.php';
	include 'includes/viewusers.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//Here we instantiate the ViewUsers class
	$users = new ViewUsers();
	//Then we run the showAllUsers() method, which shows all the users in the database
	$users->showAllUsers();
?>
</body>
</html>
