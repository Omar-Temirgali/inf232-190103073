<?php
    $db = mysqli_connect("localhost", "root", "", "stick");
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>