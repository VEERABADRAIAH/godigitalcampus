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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the employee ID from the request
        $employeeId = $_POST['employeeId'];

        // Delete query
        $sql = "DELETE FROM employees WHERE employee_id = :employeeId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':employeeId', $employeeId);
        $stmt->execute();

        echo json_encode(['status' => 'success', 'message' => 'Employee deleted successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
