


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    
    <?php
/*
 * $GLOBALS
 * $QPOST
 * $QGET
 * $QCOOKIE
 * $_SESSION
 */
echo $_POST['name'];
?>
    <!--  GET you can see it in url -->
    <!--  POST you canT see it in url -->
    <form method="POST">
    	<input type="hidden" name="name" value="kagaya">
    	<button type="submit">Press Me!</button>
    </form>
    
    
</body>
</html>
