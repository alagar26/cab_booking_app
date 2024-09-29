<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Booking App - Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="img/logo.png" alt="Logo" class="logo">
            <h1>Cab Booking App</h1>
            <a href="index.html" class="logout">Logout</a>
        </header>


        <div class="booking-section">
            <h2>Book a Cab</h2>
            <form id="bookingForm" action="book_cab.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
                
                <label for="pickup_location">Pickup Location:</label>
                <input type="text" id="pickup_location" name="pickup_location" required>
                
                <label for="drop_location">Dropping Location:</label>
                <input type="text" id="drop_location" name="drop_location" required>
                
                <label for="pickup_date">Pickup Date:</label>
                <input type="date" id="pickup_date" name="pickup_date" required>
                
                <label for="pickup_time">Pickup Time:</label>
                <input type="time" id="pickup_time" name="pickup_time" required>
                
                <button type="submit">Book a Cab</button>
            </form>
        </div>
    </div>

    <script src="js/scripts.js"></script>
</body>
</html>
