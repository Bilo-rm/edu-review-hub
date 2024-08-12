<?php

session_start(); // Start the session

// Check if user_id and school_id are set in the session
if (!isset($_SESSION['user_id']) || !isset($_SESSION['school_id'])) {
    echo "User or School ID not found in session.";
    exit;
}

echo $_SERVER["REQUEST_METHOD"]; // Check the request method
var_dump($_POST); // Display the POST data received

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $reputation = $_POST['reputation'];
    $location = $_POST['location'];
    $opportunities = $_POST['opportunities'];
    $facilities = $_POST['facilities'];
    $food = $_POST['food'];
    $internet = $_POST['internet'];
    $safety = $_POST['safety'];
    $clubs = $_POST['clubs'];
    $instructors = $_POST['instructors'];
    $review_text = $_POST['review_text'];

    // Retrieve user_id and school_id from the session
    $user_id = $_SESSION['user_id'];
    $school_id = $_SESSION['school_id'];
    

// Establish database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "users"; // Your database name
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into your table (change the table name and column names accordingly)
    $sql = "INSERT INTO school_ratings (school_id, user_id, reputation, location, opportunities, facilities, food, internet, safety, clubs, instructors, review_text)
            VALUES ('$school_id','$user_id', '$reputation', '$location', '$opportunities' ,'$facilities', '$food', '$internet', '$safety', '$clubs', '$instructors', '$review_text')";

    if ($conn->query($sql) === TRUE) {
        header("Location: /Rate%20My%20School/reviews_display.php");
        echo "Rating added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else { 
    echo "Form not submitted!";
}
?>
