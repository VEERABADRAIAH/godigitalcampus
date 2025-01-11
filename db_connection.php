<?php
// Database configuration
$host = 'localhost';
$dbname = 'ppcwbgto_wp156'; // Replace with your database name
$username = 'ppcwbgto@localhost';   // Replace with your database username
$password = '';       // Replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
