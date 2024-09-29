<?php
include 'dbConnection.php'; // Ensure your database connection works

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pickup_location = $_POST['pickup_location'];
    $drop_location = $_POST['drop_location'];
    $pickup_date = $_POST['pickup_date'];
    $pickup_time = $_POST['pickup_time'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO bookings (name, phone, pickup_location, drop_location, pickup_date, pickup_time, status) VALUES (?, ?, ?, ?, ?, ?, 'unassigned')");
    $stmt->bind_param("ssssss", $name, $phone, $pickup_location, $drop_location, $pickup_date, $pickup_time);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the success page after successful booking
        header("Location: bookingSuccess.html");
        exit();
    } else {
        // Handle error (optional)
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>
