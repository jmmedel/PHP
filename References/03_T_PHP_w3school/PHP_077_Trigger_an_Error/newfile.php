

<!-- 

Trigger an Error
In a script where users can input
data it is useful to trigger errors
when an illegal input occurs. In PHP,
this is done by the trigger_error() function.
Example
In this example an error occurs if the
 "test" variable is bigger than "1":
 
 -->
 
 <?php
$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below");
}
?>
 
 
 <!-- 
 The output of the code above should be something like this:

Error: [512] Value must be 1 or below
Ending Script
Now that we have learned to create our own errors and how to trigger them, lets take a look at error logging.
  -->