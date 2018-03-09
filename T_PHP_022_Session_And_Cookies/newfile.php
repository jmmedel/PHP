



<!-- 27 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
<!-- 
$_COOKIE For USER SIDE meaning browser
$_SESSION For SERVER SIDE 
 -->
    <?php 
    setcookie("name","Kagaya",time()+ 86400);
    $_SESSION['name'] = "Kagaya";
    
    ?>
</body>
</html>