<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //SUPERGLOBALs are predefined variables that we can ALWAYS access no matter the scope we are in
      //In the next couple of lessons we will learn about the few of them I believe is important to learn here in the beginning of the PHP course
      $x = "I am in the global scope!";

      function test() {
        //A SUPERGLOBAL is a type of variable
        //The SUPERGLOBAL name has to be uppercased!
        echo $GLOBALS['x'];
      }
    ?>
  </body>
</html>
