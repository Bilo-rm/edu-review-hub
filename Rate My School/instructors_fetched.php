<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Specify the school_id you want to retrieve
$school_id = $_SESSION['school_id']; // Replace with the desired school_id

// Query to fetch data from the instructors table based on school_id
$sql = "SELECT * FROM instructors WHERE instructor_school_id = $school_id";
$result = $conn->query($sql);

// Initialize an array to store the fetched data
$instructors = array();

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch data of each row and store it in the array
    while ($row = $result->fetch_assoc()) {
        $instructors[] = $row;
    }
}

// Close the connection
$conn->close();

// Return the fetched data
return $instructors;

function getInstructorsByDepartment($department, $conn)
{
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM instructors WHERE department = ?");
    $stmt->bind_param("s", $department);

    // Execute the statement
    $stmt->execute();

    // Get result set
    $result = $stmt->get_result();

    // Initialize an array to store the fetched data
    $instructors = array();

    // Check if there are results
    if ($result->num_rows > 0) {
        // Fetch data of each row and store it in the array
        while ($row = $result->fetch_assoc()) {
            $instructors[] = $row;
        }
    }

    // Close the statement (no need to close the connection here)
    $stmt->close();

    // Return the fetched data
    return $instructors;
}
?>