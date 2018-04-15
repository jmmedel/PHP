<?php

class Users {

	//Properties and Methods goes here
	public $first;
	public $last;
	public $hairColor;
	public $eyeColor;

	//Here we can initialize object properties in our constructor
	//This means that we assign values to our properties, as soon as we create an object
	//This is optional btw!
	public function __construct($first, $last, $hairColor, $eyeColor) {
		$this->first = $first;
		$this->last = $last;
		$this->hairColor = $hairColor;
		$this->eyeColor = $eyeColor;
	}

	public function fullName() {
		return $first." ".$last;
	}

	public function __destruct() {

	}

}
