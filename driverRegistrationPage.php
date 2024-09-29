<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Driver Registration</h1>
        <form action="processDriverRegistration.php" method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="text" name="car_model" placeholder="Car Model" required>
            <input type="text" name="car_number" placeholder="Car Number" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
