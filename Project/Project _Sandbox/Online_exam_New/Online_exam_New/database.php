<?php
/*
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("quiz_new",$cn)  or die("Could connect to Database");
*/
?>

<?php
$conn=mysqli_connect("localhost","root","","quiz_new")or die(mysqli_error());
?>