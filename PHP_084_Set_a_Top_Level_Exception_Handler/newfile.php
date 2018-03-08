


<!-- 
Set a Top Level Exception Handler
The set_exception_handler() function
 sets a user-defined function to handle 
 all uncaught exceptions:
 
 -->
 
 <?php
function myException($exception) {
  echo "<b>Exception:</b> " . $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');
?>

<!-- 

The output of the code above should be something like this:

Exception: Uncaught Exception occurred
In the code above there was no "catch" block. Instead, the top level exception handler triggered. This function should be used to catch uncaught exceptions.

 -->
 
 <!-- 
 Rules for exceptions
Code may be surrounded in a try block, to help catch potential exceptions
Each try block or "throw" must have at least one corresponding catch block
Multiple catch blocks can be used to catch different classes of exceptions
Exceptions can be thrown (or re-thrown) in a catch block within a try block
A simple rule: If you throw something, you have to catch it.

  -->
