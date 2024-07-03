<?php
$servername = "database-1.cwx35jq5nqww.us-east-1.rds.amazonaws.com";
$username = "admin2510";
$password = "w5w=j;9Em0~9";
$dbname = "AppDatabase1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    contact VARCHAR(100) NOT NULL,
    address TEXT NOT NULL
)";

// Execute the query
if ($conn->query($sql) === FALSE) {
    die("Error creating table: " . $conn->error);
}
?>