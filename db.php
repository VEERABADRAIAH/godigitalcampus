<?php
// Database connection configuration
$servername = "localhost"; // Replace with your server name
$username ="ppcwbgto_wp156";        // Replace with your database username
$password = "79.5S)4dpP";            // Replace with your database password
$database = "ppcwbgto_wp157"; // Replace with your database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
