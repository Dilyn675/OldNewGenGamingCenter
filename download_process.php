<?php
// Include database connection file
include_once 'db_connection.php';

// Retrieve game ID from URL parameter
$game_id = $_GET['game_id'];

// Check if the game ID is valid
$query = "SELECT * FROM Games WHERE VideoGameID = $game_id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Game ID is valid, simulate download process (replace with actual download logic)
    $game_data = mysqli_fetch_assoc($result);
    $game_name = $game_data['VideoGameName'];
    $download_link = ""; // Example download link replace with your own download link either passing by url or predefined
    header("Location: $download_link");
    exit();
} else {
    // Game ID is not valid, redirect to homepage or show error message
    header("Location: index.php");
    exit();
}
?>