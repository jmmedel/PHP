<?php

class NewClass {

	public $data = "I am a property";

	//We have a special class named __construct in OOP PHP (notice that there are 2 _ before the class name)
	//This constructor method will always run first automatically, when we instantiate the class
	public function __construct() {
		echo "This class has been instantiated <br>";
	}

	public function setNewProperty($newdata) {
		$this->data = $newdata;
	}

	public function getProperty() {
		return $this->data;
	}

	//We also have a special class named __destruct in OOP PHP (notice that there are 2 _ before the class name)
	//This destruct method will always run at the end automatically, when we instantiate the class
	public function __destruct() {
		echo "<br> This is the end of the class!";
	}

	//An example of when to use these, could be to open and close a connection

}
