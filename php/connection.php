<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "travel_agency";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the database exists
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->exec($sql);
    echo "Database created successfully\n";

    // Select the database
    $conn->exec("USE $dbname");

    // Check if the table exists, create it if not
    $sql = "CREATE TABLE IF NOT EXISTS destinations (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price INT NOT NULL,
        image_url VARCHAR(255) NOT NULL
    )";
    $conn->exec($sql);
    echo "Table created successfully\n";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close the connection (optional as PDO automatically closes the connection when the script ends)
// $conn = null;
?>