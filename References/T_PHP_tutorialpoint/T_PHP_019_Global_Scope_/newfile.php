


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
    #using global scope
    $x = 4;
    function something()
    {
        $y = 10;
        
    }
    echo $y; # you get an error
    
    ?>
</body>
</html>