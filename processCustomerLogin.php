<?php
include 'dbConnection.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize inputs to prevent SQL injection (Optional but recommended)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Prepare SQL query
    $sql = "SELECT * FROM customers WHERE email='$username' AND password='$password'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if query was successful
    if ($result === false) {
        // If query fails, output the error
        echo "Error in SQL query: " . $conn->error;
    } else {
        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Redirect to customer dashboard
            header("Location: customerDashboard.php");
        } else {
            // Invalid credentials message
            echo "Invalid login credentials.";
        }
    }
}
?>
