<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post">

    <div>
        <p>Which colour do you like?</p>

        <input type="radio" name="colour" value="blue" checked>Blue<br>
        <input type="radio" name="colour" value="red">Red<br>
        <input type="radio" name="colour" value="green">Green
    </div>

    <button>Send</button>

</form>

</body>
</html>
