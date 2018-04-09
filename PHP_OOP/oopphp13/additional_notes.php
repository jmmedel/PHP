<?php

/*--INTRODUCTION TO PDO--

In this document I will teach PDO.

PDO is slightly different than MySQLi, which we have been using in previous lessons in this course and in the PHP course on this channel.

PDO is used to connect to our database safely and efficiently, and is the preferred method for OOP programmers. PDO only works with Object Oriented Programming!
Benefits to PDO are security, usability, and reusability.

--HOW DO WE CONNECT TO A DATABASE?--

PDO uses something called DSN when it connects to a database. This basically means that PDO wants you to include a few more configuration details, than if we were to connect using MySQLi.

DSN consist of a string with 3 different details, and it looks like the following:
mysql:host=localhost;dbname=testdb;charset=utf8mb4

Bellow is an example of how we connect using PDO:*/

$host = 'localhost';
$db   = 'testdb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

//Data Source Name
//Use print_r(PDO::getAvailableDrivers()); to see which drivers you have.
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

/*--RUNNING QUERIES WITHOUT VARIABLES--

If we are not including any user defined parameters in our query, then we can use the following to query a database, since it doesn't focus on making the query secure.*/

$stmt = $pdo->query('SELECT name FROM users');
while ($row = $stmt->fetch())
{
    echo $row['name'];
}

/*--RUNNING QUERIES WITH VARIABLES--

When we include variables in our query, which has been provided by our users, then we need to use PDO slightly differently in order to include "prepared statements" in the query. This makes it a safer query.

As seen in the bellow example, we first need to prepare the query, and then later execute it.*/

$stmt = $pdo->prepare('SELECT * FROM users WHERE email=? AND uid=?');
$stmt->execute([$email, $uid]);
$user = $stmt->fetch();

//We can also check how many rows the query returned

$stmt = $pdo->prepare('SELECT * FROM users WHERE email=? AND uid=?');
$stmt->execute([$email, $uid]);
if ($stmt->rowCount()) {
  while ($row = $stmt->fetch())
  {
      echo $row['uid'];
  }
}
else {
  echo "NO RESULTS!";
}
