<?php
require 'db_connection.php'; // Your database connection script

if (isset($_GET['employeeId'])) {
    $employeeId = $_GET['employeeId'];

    try {
        $sql = "SELECT * FROM employees WHERE employee_id = :employeeId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':employeeId', $employeeId);
        $stmt->execute();

        $employee = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($employee) {
            echo json_encode(['status' => 'success', 'data' => $employee]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Employee not found.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
}
?>
