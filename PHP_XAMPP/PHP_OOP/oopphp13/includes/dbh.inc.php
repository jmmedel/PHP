<?php

class Dbh {

  private $host = 'localhost';
  private $db   = 'testdb';
  private $user = 'root';
  private $pass = '';
  //This is an additional parameter which is optional
  private $charset = 'utf8mb4';

  protected function connect() {
    //The "try" and "catch" are used to check for errors
    //The "try/catch" is optional
    try {
      //DSN means "data source name", and is used to provide info on the database
      $dsn = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$charset;
      //Here we create the PDO connection
      $pdo = new PDO($dsn, $this->user, $this->pass);
      //Here we set additional attributes
      //This is optional, and is only used because we use the try/catch
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //Here we return the connection for other classes to use
      return $pdo;
    }
    //Here we "catch" an error message if there is one
    //We set the type to "PDOExeption", and tell it that we use $e to refer to it
    catch (PDOException $e) {
      //Then we get the error message if there is one
      echo "Connection failed: " . $e->getMessage();
    }
  }

}
