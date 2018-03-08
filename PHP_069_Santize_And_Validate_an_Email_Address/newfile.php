


<!-- 

Sanitize and Validate an Email Address
The following example uses the filter_var() 
function to first remove all illegal characters
from the $email variable, then check if it is a
valid email address:

 -->
 
 <!DOCTYPE html>
<html>
<body>

<?php
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?>

</body>
</html>
