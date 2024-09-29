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

    // Insert booking into the database
    $sql = "INSERT INTO bookings (name, phone, pickup_location, drop_location, pickup_date, pickup_time, status) 
            VALUES ('$name', '$phone', '$pickup_location', '$drop_location', '$pickup_date', '$pickup_time', 'unassigned')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect to the success page after successful booking
        header("Location: bookingSuccess.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
