<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
</head>
<body>
    <h1>Customer List</h1>

    <?php
    include 'db.php';

    $sql = "SELECT * FROM Customers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Customer: " . $row["FirstName"] . " " . $row["LastName"] . "<br>";
        }
    } else {
        echo "No customers found.";
    }

    $conn->close();
    ?>
</body>
</html>
