<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Functions do things to our data!
      //The term "string" is used in PHP when we talk about text
      //Bellow are examples of string functions

      //Here we get the string lenght/number of characters
      echo strlen("Hi Daniel");

      //Here we get the word count of the string
      echo str_word_count("Hi Daniel");

      //Here we reverse the letters in the string
      echo strrev("Hi Daniel");

      //Here we get the position of a letter in the string
      //Notice that there are two parameters in this function
      //Also, in PHP we ALWAYS start counting at 0. Meaning that the position of "H" will be 0, and "D" will be 3.
      echo strpos("Hi Daniel", "D");
      //We can also search for words!
      echo strpos("Hi Daniel", "Daniel");

      //Here we replace "Daniel" with the word "John" in a string
      echo str_replace("Daniel", "John", "Hi Daniel");
    ?>
  </body>
</html>
