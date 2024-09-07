<?php
$servername = "localhost";
$username = "root"; // Default username for MySQL
$password = ""; // Default password for MySQL (leave blank if not set)
$dbname = "users_db"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
