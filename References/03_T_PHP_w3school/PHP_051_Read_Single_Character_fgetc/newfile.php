
<!-- 
PHP Read Single Character - fgetc()
The fgetc() function is used to read a single character from a file.

The example below reads the "webdictionary.txt" file character by character, until end-of-file is reached:
 -->
 
 <?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

<!-- 
Note: After a call to the fgetc() function,
 the file pointer moves to the next character.
 -->