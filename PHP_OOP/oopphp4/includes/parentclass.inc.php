<?php

class ParentClass {

	//Properties and Methods goes here, we will get more into these in the next episode
	//In classes we have something called "scopes", which decides where we can access the content of the class
	//The scopes we have are public, protected, and private
	private $name = "Hey there!";
	protected $color = "Blue!";

	public function name() {
		return "hi";
	}

}
