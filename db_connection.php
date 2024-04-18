<?php
$servername = "localhost";
$username = "Dilyn Howard"; // replace with your database user name 
$password = "101dlh1420PMA"; // replace with your database password
$database = "oldnewgengamingcenter"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>