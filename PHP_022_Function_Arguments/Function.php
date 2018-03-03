

<!-- 
PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and 
the name is used inside the function, which outputs several different first names, but an equal last name:

 -->
 
 <?php 
 
 function familyName($name){
     echo "$name Refsnes.<br>";
 }
 
 familyName("kagaya");
 familyName("Medel");
 familyName("john");
 familyName("Bob");
 
 
 function name_and_age($name,$age){
     echo "$name refresne year $age old <br>";
     
 }
 name_and_age("kagaya", 24);
 
 
 ?>
 
 