<?php
// Include database connection file
include_once 'db_connection.php';

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check if user exists
$query = "SELECT * FROM Users WHERE EmailAddress = '$email' AND UserPassword = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // User exists, redirect to homepage or wherever you want
    header("Location: index.php");
    exit();
} else {
    // User doesn't exist or password is incorrect, display error message or redirect to login page
    echo "Invalid email or password. Please try again.";
}
?>