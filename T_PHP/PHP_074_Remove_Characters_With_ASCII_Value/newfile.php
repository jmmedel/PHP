

<!-- 

Remove Characters With ASCII Value > 127
The following example uses the filter_var()
function to sanitize a string. It will both 
remove all HTML tags, and all characters with ASCII
 value > 127, from the string:
 
 -->

 
 <!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$str = "<h1>Hello WorldÆØÅ!</h1>";

// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>

</body>
</html>