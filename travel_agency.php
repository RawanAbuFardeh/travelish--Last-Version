<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "travelagency";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS travelagency";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($database);

// Create Customers Table
$sql = "CREATE TABLE IF NOT EXISTS Customers (
    CustomerID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Email VARCHAR(100),
    Phone VARCHAR(20)
)";

$conn->query($sql);

// Create Packages Table
$sql = "CREATE TABLE IF NOT EXISTS Packages (
    PackageID INT AUTO_INCREMENT PRIMARY KEY,
    Destination VARCHAR(100),
    Description TEXT,
    Price DECIMAL(10, 2)
)";

$conn->query($sql);

// Create Bookings Table
$sql = "CREATE TABLE IF NOT EXISTS Bookings (
    BookingID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT,
    PackageID INT,
    BookingDate DATE,
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID),
    FOREIGN KEY (PackageID) REFERENCES Packages(PackageID)
)";

$conn->query($sql);

// Close the database connection
$conn->close();
?>
