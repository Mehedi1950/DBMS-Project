<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "art_gallery"; // Ensure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
