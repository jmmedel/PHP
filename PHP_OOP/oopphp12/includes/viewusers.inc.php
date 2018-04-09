<?php

//This class only shows data to the user, and doesn't have anything to do with the database
//This class also extends the Users class, which takes care of the database queries
class ViewUsers extends Users {

	public function showAllUsers() {
		//Here we grab the array from the Users class
		$datas = $this->getAllUsers();
		//Here we then loop through the array, and echo the data
		foreach ($datas as $data) {
			echo $data['uid']."<br>";
			echo $data['pwd']."<br>";
		}
	}

}
