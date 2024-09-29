<?php
session_start(); // Start the session
include 'dbConnection.php'; // Include your database connection file

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: driverLoginPage.php"); // Redirect to login if not logged in
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $car_details = $_POST['car_details'];
    
    // If you want to handle profile photo upload, you would need additional code here
    
    // Assume you have the driver ID stored in the session
    $driverId = $_SESSION['driver_id']; // Make sure this session variable is set during login

    // Prepare the SQL statement to update the driver's information
    $stmt = $conn->prepare("UPDATE drivers SET phone = ?, address = ?, car_details = ? WHERE driver_id = ?");
    
    if ($stmt === false) {
        die("SQL error: " . htmlspecialchars($conn->error)); // Error handling
    }
    
    // Bind parameters and execute the statement
    $stmt->bind_param("sssi", $phone, $address, $car_details, $driverId);
    if ($stmt->execute()) {
        // Optionally, you can set a success message in the session
        $_SESSION['message'] = "Information updated successfully!";
        header("Location: driverDashboard.php"); // Redirect back to the dashboard
        exit();
    } else {
        echo "Error updating information.";
    }
}
?>
