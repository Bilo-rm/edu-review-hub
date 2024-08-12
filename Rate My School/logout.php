<?php
session_start(); // Start the session at the beginning of the file

session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

header("Location: /Rate%20My%20School/index.php"); // Redirect to the login page after logout
exit;
?>
