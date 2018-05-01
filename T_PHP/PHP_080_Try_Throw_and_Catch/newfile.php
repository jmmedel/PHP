


<!-- 

Try, throw and catch
To avoid the error from the example above, we need to create the proper code to handle an exception.

Proper exception code should include:

Try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
Throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
Catch - A "catch" block retrieves an exception and creates an object containing the exception information
Lets try to trigger an exception with valid code:

 -->
 
 
<?php
//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(2);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>

<!-- 
The code above will get an error like this:

Message: Value must be 1 or below
Example explained:
The code above throws an exception and catches it:

The checkNum() function is created. It checks if a number is greater than 1. If it is, an exception is thrown
The checkNum() function is called in a "try" block
The exception within the checkNum() function is thrown
The "catch" block retrieves the exception and creates an object ($e) containing the exception information
The error message from the exception is echoed by calling $e->getMessage() from the exception object
However, one way to get around the "every throw must have a catch" rule is to set a top level exception handler to handle errors that slip through.
 -->
