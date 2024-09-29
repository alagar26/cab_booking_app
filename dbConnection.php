<?php
$servername = "localhost";  // Usually localhost for local development
$username = "root";  // Default username for MySQL
$password = "";  // Leave blank if there's no password
$dbname = "cab_booking_app";  // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
