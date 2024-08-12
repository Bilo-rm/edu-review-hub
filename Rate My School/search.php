<?php

session_start(); // Start the session at the beginning of the file
/*
if (!isset($_SESSION['username'])) {
    header("Location: ../login1.html"); // Redirect to login page if session doesn't exist
    exit;
}
*/
// Establish database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "users"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["query"])) {
    $search_query = $_GET["query"];

    // Search for schools
    $sql = "SELECT * FROM schools WHERE school_name LIKE '%$search_query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display found schools
        while ($row = $result->fetch_assoc()) {
            $school_id = $row['school_id'];
            $school_name = $row['school_name'];
        /*
            echo "<h3>School: $school_name</h3>";
            echo "<a href='/Rate%20My%20School/ratings.php?school_id=$school_id'>View School Ratings</a>";
            */
            // set it in a session for later use
            $_SESSION['school_id'] = $school_id;
            $_SESSION['school_name'] = $school_name;

            header("Location: ./reviews_display.php");
            exit; // Exit after redirection
        }
    } else {
        echo "No schools found.";
    }
}

$conn->close();
?>
