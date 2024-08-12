<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_input_username = $_POST["username"]; // Use a different variable name here
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    // Hash the password (you should use password_hash() in a real application)
    //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Your database connection code
    $servername = "localhost";
    $db_username = "root"; // Use a different variable name for the MySQL username
    $db_password = ""; // Your MySQL password
    $dbname = "users"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to insert data into the login table
    $stmt = $conn->prepare("INSERT INTO login (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user_input_username, $email, $password); // Use the retrieved form data here//hashedPassword

    if ($stmt->execute()) {
        //echo "Registration successful!";
        // Redirect to a success page or login page after successful registration
         header("Location:/Rate%20My%20School/index.php");
         exit();
    } else {
        echo "Error: " . $conn->error;
    }



    $stmt->close();
    $conn->close();
}
?>
