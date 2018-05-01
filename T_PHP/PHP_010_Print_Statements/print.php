<!-- 
The PHP print Statement
The print statement can be used with or without parentheses: print or print().

Display Text

The following example shows how to output text with the print command (notice that the text can contain HTML markup):

 -->
 
 <!DOCTYPE html>
<html>
<body>

<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 

<!-- 
Display Variables

The following example shows how to output text and variables with the print statement:
 -->
 <?php
 
 $txt1 = "Learn PHP";
 $txt2 = "Kobe programming";
 $x = 5;
 $y = 4;
 
 print "<h2>" .$txt1 ."</h2>";
 print "Study PHP at" .$txt2. "<br>";
 print $x + $y;
 
 ?>

</body>
</html>
