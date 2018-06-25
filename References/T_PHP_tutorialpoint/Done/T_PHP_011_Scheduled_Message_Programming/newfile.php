

<html>
<body>


<?php 
    $dayofweek = date("w");
    switch ($dayofweek)
    {
        case 1:
            echo "It is Monday!";
            break;
        case 2:
            echo "It is Tuesday!";
            break;
        case 3:
            echo "It is Wednesday!";
            break;
        case 4:
            echo "<p>It is Thurday!</p>";
            break;
        case 5:
            echo "It is Friday!";
            break;
        case 6:
            echo "It is Saturday!";
            break;
        case 7:
            echo "It is Sunday!";
            break;
            
    }

?>
</body>
</html>