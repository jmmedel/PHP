<!-- 
PHP 5 File Upload
With PHP, it is easy to upload files to the server.

However, with ease comes danger, so always be careful when allowing file uploads!
Configure The "php.ini" File
First, ensure that PHP is configured to allow file uploads.

In your "php.ini" file, search for the file_uploads directive, and set it to On:

file_uploads = On

 -->
 
 <!-- 
 Create The HTML Form
Next, create an HTML form that allow
 users to choose the image file they want to upload:
 
  -->
  
  <!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>

</body>
</html>

<!-- 
Some rules to follow for the HTML form above:

Make sure that the form uses method="post"
The form also needs the following attribute: enctype="multipart/form-data". It specifies which content-type to use when submitting the form
Without the requirements above, the file upload will not work.

Other things to notice:

The type="file" attribute of the <input> tag shows the input field as a file-select control, with a "Browse" button next to the input control
The form above sends data to a file called "upload.php", which we will create next.
 -->
 
 <!-- 
 PHP script explained:

$target_dir = "uploads/" - specifies the directory where the file is going to be placed
$target_file specifies the path of the file to be uploaded
$uploadOk=1 is not used yet (will be used later)
$imageFileType holds the file extension of the file (in lower case)
Next, check if the image file is an actual image or a fake image
Note: You will need to create a new directory called "uploads" in the directory where "upload.php" file resides. The uploaded files will be saved there.
 
  -->
 
 
