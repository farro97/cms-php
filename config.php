<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafenodejs";

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