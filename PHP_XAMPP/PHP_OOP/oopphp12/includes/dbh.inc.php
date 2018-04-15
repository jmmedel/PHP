<?php

class Dbh {

	//Here we create the connection parameters as class properties
	private $servername;
	private $username;
	private $password;
	private $dbname;

	//Here we create a method that connects to our database
	protected function connect() {
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "ooptutorial";

		//Here we create a connection using MySQLi
		//Yes MySQLi can alse be used in OOP programming besides PDO!
		//There are benefits in both MySQLi and PDO
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		//Here we return the connection so we can use it in the Users class
		return $conn;
	}

}
