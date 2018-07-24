<?php

include_once 'newfile.php';
#this is get all the id  from form
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "Insert into userss(user_first,user_last,user_email,user_uid,user_pwd)
    Values('John','Medel','QWE','qwe','QWEQWE');";
    #Values ('$first','$last','$email','$uid','$pwd');";
    #TEst the code 

    # the first parameter is connection and second is querty
     mysqli_query($conn, $sql);

     header("Location: C:\xampp\htdocs\test\index.php?signup=Sucess");