<?php

class User extends Dbh {

  //This is the first method we can use to get data
  //This is the most basic way of doing it
  //ONLY USE THIS if you have NO variables in your SQL query, otherwise use the other method bellow
  public function getAllUsers() {
    //$this->connect() is our connection from the Dbh class
    //We use the method query() to run the SQL string
    $stmt = $this->connect()->query('SELECT * FROM users');
    while ($row = $stmt->fetch())
    {
        echo $row['uid'];
    }
  }

  //Here we get data WITH variables in our SQL query
  public function getUsersWithCountCheck() {
    $id = 1;
    $uid = "John";

    //PDO uses Prepared Statements
    //We use the method prepare() to prepare the SQL string
    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE id=? AND uid=?');
    //We use the method execute() to run the SQL string with the added variables
    $stmt->execute([$id, $uid]);

    //Here we can check the number of results using $stmt->rowCount()
    //$stmt->rowCount() is OPTIONAL
    //rowCount() can be achieved more efficiently, by doing it using the query itself instead
    if ($stmt->rowCount()) {
      while ($row = $stmt->fetch())
      {
          return $row['uid'];
      }
    }
    else {
      return "NO RESULTS!";
    }
  }

}
