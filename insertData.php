<?php
    $conn = new mysqli('localhost', 'root', '', 'stick');
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO peoplle (fName, lName, email)
    VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."')";
            
    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    require "index.php";
?>