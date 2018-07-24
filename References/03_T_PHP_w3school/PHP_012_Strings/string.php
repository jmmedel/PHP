
<!-- 
PHP 5 Strings
A string is a sequence of characters, like "Hello worl
PHP String Functions
In this chapter we will look at some commonly used functions to manipulate strings.

Get The Length of a String
The PHP strlen() function returns the length of a string.

The example below returns the length of the string "Hello world!":
Count The Number of Words in a String
The PHP str_word_count() function counts the number of words in a string:

Reverse a String
The PHP strrev() function reverses a string:

Search For a Specific Text Within a String
The PHP strpos() function searches for a specific text within a string.

If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

The example below searches for the text "world" in the string "Hello world!":

Replace Text Within a String
The PHP str_replace() function replaces some characters with some other characters in a string.

The example below replaces the text "world" with "Dolly":

 -->
 
 
<!DOCTYPE html>
<html>
<body>

<?php
echo strlen("Hello world!");// outputs 12
echo "<br>";
echo str_word_count("Hello world!"); // outputs 2
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";

?> 
 
</body>
</html>

