<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reverse Name</title>
</head>
<body>
    <h1>Reverse Your Name</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        if (!empty($name)) {
            $reversedName = strrev($name);
            echo "<h2>Your reversed name is: $reversedName</h2>";
        } else {
            echo "<h2>Please enter a name.</h2>";
        }
    }
    ?>
</body>
</html>
