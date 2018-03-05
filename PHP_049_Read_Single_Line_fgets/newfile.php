<!-- 
PHP Read Single Line - fgets()
The fgets() function is used to read a single line from a file.

The example below outputs the first line of the "webdictionary.txt" file:
 -->
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

</body>
</html>

<!-- 
Note: After a call to the fgets() function, the file pointer has moved to the next line.

 -->