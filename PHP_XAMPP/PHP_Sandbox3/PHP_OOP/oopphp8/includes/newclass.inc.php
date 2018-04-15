<?php

class NewClass {

	public $data = "I am a property";
	//We can refer to this class by writing __CLASS__ (there are 2 _ on each side)
	public $error = "This is the class called ".__CLASS__."!";

	public function __construct() {
		echo "This class has been instantiated <br>";
	}

	//The toString method is another OOP PHP method that runs when we try to echo the object itself
	public function __toString() {
		echo "toString method: ";
		return $this->error;
	}

	public function setNewProperty($newdata) {
		$this->data = $newdata;
	}

	public function getProperty() {
		return $this->data;
	}

	public function __destruct() {
		echo "<br> This is the end of the class!";
	}

}
