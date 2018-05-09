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

    <p>Which colours do you like?</p>

    <div>
        <input type="checkbox" name="colours[]" value="red"> Red
    </div>
    <div>
        <input type="checkbox" name="colours[]" value="green"> Green
    </div>
    <div>
        <input type="checkbox" name="colours[]" value="blue"> Blue
    </div>

    <button>Send</button>

</form>

</body>
</html>
