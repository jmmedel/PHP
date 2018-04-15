<?php

class NewClass {

	//Properties and Methods are similar to variables and functions. Notice I said "similar"...

	//Here is a property
	public $data = "I am a property";

	//Here is a method
	//This method can change the value of the above property, when used in our index file
	public function setNewProperty($newdata) {
		//When inside a class, we can refer to a property by writing: $this->propertyname
		//Meaning that we assign a new value to the property here
		$this->data = $newdata;
	}

	//Here is another method
	public function getProperty() {
		//Here we simply get the above property
		//We can show a "return" value by using "echo" in the index file
		return $this->data;
	}

}
