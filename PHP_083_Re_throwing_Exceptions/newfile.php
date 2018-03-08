


<!-- 

Re-throwing Exceptions
Sometimes, when an exception is thrown, you may wish to handle it differently than the standard way. It is possible to throw an exception a second time within a "catch" block.

A script should hide system errors from users. System errors may be important for the coder, but are of no interest to the user. To make things easier for the user you can re-throw the exception with a user friendly message:

 -->
 
 
<?php
class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
    return $errorMsg;
  }
}

$email = "someone@example.com";

try {
  try {
    //check for "example" in mail address
    if(strpos($email, "example") !== FALSE) {
      //throw exception if email is not valid
      throw new Exception($email);
    }
  }
  catch(Exception $e) {
    //re-throw exception
    throw new customException($email);
  }
}

catch (customException $e) {
  //display custom message
  echo $e->errorMessage();
}
?>

<!-- 

Example explained:
The code above tests if the email-address contains the string "example" in it, if it does, the exception is re-thrown:

The customException() class is created as an extension of the old exception class. This way it inherits all methods and properties from the old exception class
The errorMessage() function is created. This function returns an error message if an e-mail address is invalid
The $email variable is set to a string that is a valid e-mail address, but contains the string "example"
The "try" block contains another "try" block to make it possible to re-throw the exception
The exception is triggered since the e-mail contains the string "example"
The "catch" block catches the exception and re-throws a "customException"
The "customException" is caught and displays an error message
If the exception is not caught in its current "try" block, it will search for a catch block on "higher levels".

 -->