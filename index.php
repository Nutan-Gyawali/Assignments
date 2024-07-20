<?php


include("database.php");

$sql = "INSERT INTO users (username, pwd,email)
        VALUES ('nutan', 'apple2', 'nutangyawali01@gmail.com')";

mysqli_query($conn, $sql);


mysqli_close($conn);
