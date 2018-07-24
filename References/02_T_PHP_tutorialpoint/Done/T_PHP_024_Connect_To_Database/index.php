<?php 

include_once 'newfile.php';
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    
<?php 

    $sql = "SELECT * FROM userss;";
    # the first parameter is connection and second is querty
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row =  mysqli_fetch_assoc($result)){
               echo $row['user_uid']."<br>";
        }
    }

?>
    
</body>
</html>
