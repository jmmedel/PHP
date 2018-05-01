

<!-- 

Tip: filter_var() and Problem With 0
In the example above, if $int was set
to 0, the function above will return "
Integer is not valid". To solve this problem,
use the code below:
  
 -->
 
 
 
 <!DOCTYPE html>
<html>
<body>

<?php
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>

</body>
</html>


 