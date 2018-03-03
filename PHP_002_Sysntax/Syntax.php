<!--  
PHP 5 Syntax
Basic PHP Syntax
A PHP script can be placed anywhere in the document.

A PHP script starts with ?php and ends with ?>:
The default file extension for PHP files is ".php".

A PHP file normally contains HTML tags, and some PHP scripting code.

Below, we have an example of a simple PHP file, with a PHP script that
 uses a built-in PHP function "echo" to output the text "Hello World!" 
 on a web page:
 Note: PHP statements end with a semicolon (;).
 Comments in PHP
A comment in PHP code is a line that is not read/executed as part of the program. Its only purpose is to be read by someone who is looking at the code.

Comments can be used to:

Let others understand what you are doing
Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
PHP supports several ways of commenting:
 -->


<!DOCTYPE html>
<html>
<body>

<?php
// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

</body>
</html>



