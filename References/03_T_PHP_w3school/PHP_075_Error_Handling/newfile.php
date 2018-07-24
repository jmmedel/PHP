

<!-- 

PHP Error Handling
The default error handling in PHP 
is very simple. An error message with
filename, line number and a message 
describing the error is sent to the browser.

 -->
 
 
 <!-- 
 
 PHP Error Handling
When creating scripts and web applications, error handling is an important part. If your code lacks error checking code, your program may look very unprofessional and you may be open to security risks.

This tutorial contains some of the most common error checking methods in PHP.

We will show different error handling methods:

Simple "die()" statements
Custom errors and error triggers
Error reporting
Basic Error Handling: Using the die() function
The first example shows a simple script that opens a text file:
?php
$file=fopen("welcome.txt","r");
?>
If the file does not exist you might get an error like this:

Warning: fopen(welcome.txt) [function.fopen]: failed to open stream:
No such file or directory in C:\webfolder\test.php on line 2
To prevent the user from getting an error message like the one above, we test whether the file exist before we try to access it:

  -->
  
  <?php
if(!file_exists("welcome.txt")) {
  die("File not found");
} else {
  $file=fopen("welcome.txt","r");
}
?>

<!-- 
Now if the file does not exist you get an error like this:

File not found
The code above is more efficient than the earlier code, because it uses a simple error handling mechanism to stop the script after the error.

However, simply stopping the script is not always the right way to go. Let's take a look at alternative PHP functions for handling errors.
 -->