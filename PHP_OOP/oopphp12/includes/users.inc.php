<?php

//This class handles all database queries
//This class also extends the Dbh class, which has the database connection
class Users extends Dbh {

	protected function getAllUsers() {
		//Here we query the database and get the users
		$sql = "SELECT * FROM user";
		//Here we get the connection from the Dbh class
		$result = $this->connect()->query($sql);
		//Here we check how many results we got
		$numRows = $result->num_rows;
		//If we had any results
		if ($numRows > 0)
		{
			//Here we create an empty array
			$data = array();
			//And here we insert all the data from the query into the array
			while ($row = $result->fetch_assoc())
			{
				$data[] = $row;
			}
			return $data;
		}
	}

}
