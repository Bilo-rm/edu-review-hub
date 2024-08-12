<?php
session_start(); // Start the session at the beginning of the file

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

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    $row = mysqli_fetch_array($result);

    if ($row) {
        // Retrieve the user_id from the database result
        $user_id = $row["id"]; // Replace 'id' with the actual column name for user_id in your 'login' table
    
        // Set session variables upon successful login
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user_id; // Set user_id in the session
    
        if ($row["usertype"] == "user") {
            header("Location: /Rate%20My%20School/userPage/Home.php");
            exit;
        } else if ($row["usertype"] == "admin") {
            header("location: /Rate%20My%20School/user/users.php");
            exit;
        }
    } else {
        echo "Username or Password incorrect";
    }
}

$conn->close();
?>

