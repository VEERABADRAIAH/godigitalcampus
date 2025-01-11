<?php
// Database configuration
$host = 'localhost';
$dbname = 'ppcwbgto_wp156'; // Replace with your database name
$username = 'root';      // Replace with your database username
$password = '';          // Replace with your database password

header('Content-Type: application/json');

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch employee data
    $query = "SELECT * FROM employees";
    $stmt = $pdo->query($query);
    $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['status' => 'success', 'data' => $employees]);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
