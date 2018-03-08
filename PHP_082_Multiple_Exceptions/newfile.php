

<!-- 

Multiple Exceptions
It is possible for a script to use multiple exceptions to check for multiple conditions.

It is possible to use several if..else blocks, a switch, or nest multiple exceptions. 
These exceptions can use different exception classes and return different error messages:

 -->

 <?php
class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example.com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
  //check for "example" in mail address
  if(strpos($email, "example") !== FALSE) {
    throw new Exception("$email is an example e-mail");
  }
}

catch (customException $e) {
  echo $e->errorMessage();
}

catch(Exception $e) {
  echo $e->getMessage();
}
?>


<!-- 
Example explained:
The code above tests two conditions and throws an exception if any of the conditions are not met:

The customException() class is created as an extension of the old exception class. This way it inherits all methods and properties from the old exception class
The errorMessage() function is created. This function returns an error message if an e-mail address is invalid
The $email variable is set to a string that is a valid e-mail address, but contains the string "example"
The "try" block is executed and an exception is not thrown on the first condition
The second condition triggers an exception since the e-mail contains the string "example"
The "catch" block catches the exception and displays the correct error message
If the exception thrown were of the class customException and there were no customException catch, only the base exception catch, the exception would be handled there.

 -->

 
 