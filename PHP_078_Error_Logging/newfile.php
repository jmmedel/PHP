


<!-- 

Error Logging
By default, PHP sends an error log to the server's logging system or a file, depending on how the error_log configuration is set in the php.ini file. By using the error_log() function you can send error logs to a specified file or a remote destination.

Sending error messages to yourself by e-mail can be a good way of getting notified of specific errors.

Send an Error Message by E-Mail
In the example below we will send an e-mail with an error message and end the script, if a specific error occurs:
Send an Error Message by E-Mail
In the example below we will send an e-mail with an error message and end the script, if a specific error occurs:

 -->

 
 <?php
//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Webmaster has been notified";
  error_log("Error: [$errno] $errstr",1,
  "someone@example.com","From: webmaster@example.com");
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}
?>


<!-- 
The output of the code above should be something like this:

Error: [512] Value must be 1 or below
Webmaster has been notified
And the mail received from the code above looks like this:

Error: [512] Value must be 1 or below
This should not be used with all errors. Regular errors should
 be logged on the server using the default PHP logging system.
 -->