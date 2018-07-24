


<!-- 

Creating a Custom Exception Class
To create a custom exception handler you must create a special class with functions that can be called when an exception occurs in PHP. The class must be an extension of the exception class.

The custom exception class inherits the properties from PHP's exception class and you can add custom functions to it.

Lets create an exception class:

 -->

 
 <?php 
 
 class customException extends Exception{
     public function errorMessage()
     {
         //error message
         $erorMsg = 'Error on line'.$this->getLine().'in'.$this->getFile()
         .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
         return $errorMsg;
     }  
 }
 $email = "someone@example...com";
 try {
     //check if
     if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
         //throw exception if email is not valid
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
The code above throws an exception and catches it with a custom exception class:

The customException() class is created as an extension of the old exception class. This way it inherits all methods and properties from the old exception class
The errorMessage() function is created. This function returns an error message if an e-mail address is invalid
The $email variable is set to a string that is not a valid e-mail address
The "try" block is executed and an exception is thrown since the e-mail address is invalid
The "catch" block catches the exception and displays the error message
  -->
 
 <!-- 
 The new class is a copy of the 
 old exception class with an addition
 of the errorMessage() function. Since 
 it is a copy of the old class, and it 
 inherits the properties and methods from
 the old class, we can use the exception 
 class methods like getLine() and getFile() 
 and getMessage().
 
  -->
 