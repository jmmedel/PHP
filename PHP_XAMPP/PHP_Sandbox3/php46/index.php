<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	//There are a few ways we can add data into arrays

	//Here we create an empty array, and insert the data afterwards
	$people = array();
	$people[] = "Daniel";
	$people[] = "Jane";
	$people[] = "John";

	//Here is an example of how we can push more data into an array that already has data inside of it
	$people = array("Daniel", "John");
	array_push($people, "Jane");

	//We can also add even more data at once by separating them all by a comma
	array_push($people, "Jane", "Kenny", "Sarah", 10, 4, 1);
?>
</body>
</html>
