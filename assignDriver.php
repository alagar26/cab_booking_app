<?php
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookingId = $_POST['booking_id'];
    $driverId = $_POST['driver_id'];

    // Assign the driver to the booking
    $sql = "UPDATE bookings SET driver_id='$driverId', status='Assigned' WHERE id='$bookingId'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Driver assigned successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
