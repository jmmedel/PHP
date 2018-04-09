<?php

class NewClass {

	public $data = "I am a property";
	public $error = "This is the class called ".__CLASS__."!";
	//We create static properties and methods by using the "static" keyword
	public static $static = 0;

	public function __construct() {
		echo "This class has been instantiated <br>";
	}

	public function __toString() {
		echo "toString method: ";
		return $this->error;
	}

	public static function staticMethod() {
		//We can refer to static properties in this class by writing: self::$propertyName
		return self::$static;
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
