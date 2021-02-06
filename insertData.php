<?php
    include "dbConn.php";

    $sql = "INSERT INTO peoplle (fName, lName, email)
    VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."')";
            
    if ($db->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    
    $db->close();
    require "index.php";
?>