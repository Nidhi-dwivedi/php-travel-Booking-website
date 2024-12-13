<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

// Create a connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// SQL to create the users table if it doesn't exist
$createUserTable = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    number VARCHAR(15) NOT NULL
)";

// Execute the table creation query
if ($connection->query($createUserTable) === TRUE) {
    echo "Table 'users' created successfully or already exists.<br>";
} else {
    die("Error creating users table: " . $connection->error);
}

// Close the connection
$connection->close();
?>
