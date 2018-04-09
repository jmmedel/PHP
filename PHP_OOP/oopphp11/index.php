<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--
Here is a basic HTML form we will use as a calculator
Notice that we don't use the calc class, or an ovject inside the form "action"
-->
<form action="calc.php" method="POST">
	<input type="text" name="num1">
	<input type="text" name="num2">
	<select name="cal">
		<option value="add">Add</option>
		<option value="sub">Subtract</option>
		<option value="mul">Multiply</option>
	</select>
	<button type="submit">Calculate</button>
</form>
</body>
</html>
