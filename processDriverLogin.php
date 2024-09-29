<?php
session_start(); // Start a session to manage login states

include 'dbConnection.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM drivers WHERE username = ? AND password = ?");
    
    // Check if the statement preparation was successful
    if ($stmt === false) {
        die("SQL error: " . htmlspecialchars($conn->error)); // Show the SQL error
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // If credentials are valid
        $_SESSION['username'] = $username; // Save username in session
        header("Location: adminDashboard.php"); // Redirect to the admin dashboard
        exit();
    } else {
        echo "Invalid login credentials.";
    }
}
?>
