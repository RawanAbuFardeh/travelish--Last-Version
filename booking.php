<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency - Book a Package</title>
</head>
<body>
    <h1>Book a Package</h1>

    <?php
    include 'db.php';

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form data and insert into the database
        $customerID = $_POST['customer_id'];
        $packageID = $_POST['package_id'];

        $sql = "INSERT INTO Bookings (CustomerID, PackageID, BookingDate) VALUES ('$customerID', '$packageID', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "Booking successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <form method="post" action="booking.php">
        <label for="customer_id">Customer ID:</label>
        <input type="text" name="customer_id" required>

        <label for="package_id">Package ID:</label>
        <input type="text" name="package_id" required>

        <button type="submit">Book Now</button>
    </form>

    <?php
    $conn->close();
    ?>
</body>
</html>
