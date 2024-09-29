<?php
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $car_model = $_POST['car_model'];
    $car_number = $_POST['car_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO drivers (name, car_model, car_number, email, password) VALUES ('$name', '$car_model', '$car_number', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        header("Location: driverLoginPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
