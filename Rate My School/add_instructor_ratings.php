<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $courseCode = $_POST['course_Code'];
    $knowledge = $_POST['Knowledge'];
    $communication = $_POST['communication'];
    $engagement = $_POST['Engagement'];
    $overall = $_POST['Overall'];
    $reviewText = $_POST['review_text'];

    // Retrieve user_id, school_id, and instructor_id from the session
    $user_id = $_SESSION['user_id'];
    $school_id = $_SESSION['school_id'];
    $instructor_id = $_SESSION['instructor_id'];

    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the instructor_ratings table
    $sql = "INSERT INTO instructor_ratings (user_id, instructor_id, course, knowledge, communication, engagement,overall, reviewText)
            VALUES ('$user_id', '$instructor_id', '$courseCode', '$knowledge', '$communication', '$engagement','  $overall', '$reviewText')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./instructor_details.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Form not submitted!";
}
?>
