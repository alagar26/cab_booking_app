<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Driver Dashboard</h1>
            <a href="processDriverInfo.php" class="logout">Logout</a>
        </header>

        <div class="personal-info">
            <h2>Your Personal Information</h2>
            <form action="processDriverInfo.php" method="POST">
                <label for="photo">Profile Photo:</label>
                <input type="file" id="photo" name="photo">
                
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
                
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
                
                <label for="car_details">Car Details:</label>
                <input type="text" id="car_details" name="car_details" required>
                
                <button type="submit">Save Information</button>
            </form>
        </div>
    </div>
</body>
</html>
