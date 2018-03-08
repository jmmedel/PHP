


<html>
<meta charset="UTF-8">
<title>Tiitle of the document</title>
<body>

<form method = "GET">
 	<input  type = "text"name="person">
 	<button>Sumit</button>
</form>
<?php 
$name = $_GET['person'];
echo $name."Is a handsome fellow";
?>

</body>
</html>