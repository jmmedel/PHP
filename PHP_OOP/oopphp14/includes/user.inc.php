<?php

class User extends Dbh {

  //Here is an example where we get ALL users (in my video there are 2 users)
  //ONLY use this method if the query does not contain any variables
  public function getAllUsers() {
    $stmt = $this->connect()->query("SELECT * FROM users");
    while ($row = $stmt->fetch()) {
      return $row['uid'];
    }
  }

  //Here is an example where we get specific users
  //Use this if the query contains variables
  //Notice that this uses Prepared Statements
  //Also notice that I included a check, where we get the number of rows returned from the query
  public function getUsersWithCountCheck() {
    //These two variables are just examples of inputs the user might have submitted
    $id = 1;
    $uid = "John";

    //We use prepare() and execute() to use Prepared Statements
    $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id=? AND uid=?");
    $stmt->execute([$id, $uid]);

    //Here I chose to show an example of how we can see the number of rows returned from the query
    if ($stmt->rowCount()) {
      while ($row = $stmt->fetch()) {
        return $row['uid'];
      }
    }
  }

}
