<?php
/*
I habit I usually have, is to put all my OOP files inside an includes folder.
I also like to put "inc" in my file name.
Both of these you don't "have" to do, but it makes it easier to tell the files apart.
*/

//A class is a blueprint for objects, and a container for properties and methods
//We create a class with the "class" keyword, followed by the name of the class
class NewClass {

	//Properties and Methods goes here
	public $info = "This is some info";

}

//Here is an example of how we can "instantiate" the class, which makes it into an object
//Remember, the class is just a blueprint, and the object is a copy of that blueprint
//Creating an object makes it possible for us to use the properties and methods in the class
$object = new NewClass;

//If you want to see what is inside the class, you can use the following PHP function
var_dump($object);
