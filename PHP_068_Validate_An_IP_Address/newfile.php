


<!-- 

Validate an IP Address
The following example uses the
filter_var() function to check if
the variable $ip is a valid IP address:

 -->
 
 <!DOCTYPE html>
<html>
<body>

<?php
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
?>

</body>
</html>
