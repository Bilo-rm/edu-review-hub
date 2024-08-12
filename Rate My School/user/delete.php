<?php

    if(isset($_GET["id"]))
    {
        $id= $_GET["id"];
    

    // Establish database connection
    $servername = "localhost";
    $username = "root"; // Your MySQL username
    $password = ""; // Your MySQL password
    $dbname = "users"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //delete query
    $sql = "DELETE FROM login WHERE id=$id";
    $conn->query($sql);

    }
    header("location: /Rate%20My%20School/user/users.php");
    exit;
?>