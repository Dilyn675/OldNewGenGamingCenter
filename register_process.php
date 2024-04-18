<?php
// Include database connection file
include_once 'db_connection.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirm_password) {
    echo "Passwords do not match. Please try again.";
    exit();
}

// Check if email is already registered
$query = "SELECT * FROM Users WHERE EmailAddress = '$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Email already registered. Please use a different email.";
    exit();
}

// Insert user into database
$insert_query = "INSERT INTO Users (Name, EmailAddress, UserPassword) VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $insert_query)) {
    echo "Registration successful. You can now login.";
} else {
    echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>