



<?php 

session_start();

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
<ul>
	<li><a href="index.php">HOME</a></li>
	<li><a href="contanct.php">CONTACT</a></li>
<?php 

$_SESSION['username'] = "Kagaya";
echo $_SESSION['username'];
if(!isset($_SESSION['username'])){
    echo "You are not Logged in!";
} else {
    echo "You are Logged in!";
}

?>		
</ul>        
</body>
</html>