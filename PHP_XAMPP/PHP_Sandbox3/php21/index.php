<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Arrays allow for us to have many data inside one variable
      //Here is an array with names
      $names = array("Daniel", "John", "Jane", "Frida", "Bella");

      //We can get data from an array like this using []
      $names[0];

      //Remember, in PHP we ALWAYS count starting at 0
      /*
        [0] = Daniel
        [1] = John
        [2] = Jane
        [3] = Frida
        [4] = Bella
      */

      //We can also create an array in another way, by doing this
      $names[0] = "Daniel";
      $names[1] = "John";
      $names[2] = "Jane";
      $names[3] = "Frida";
      $names[4] = "Bella";
      //But this method is mainly used inside loops
    ?>
  </body>
</html>
