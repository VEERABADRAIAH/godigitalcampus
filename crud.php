<?php
// Database configuration
$host = 'localhost';
$dbname = 'ppcwbgto_wp156'; // Replace with your database name
$username = 'ppcwbgto@localhost';      // Replace with your database username
$password = '';          // Replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['addEmployee'])) {
        // Retrieve form data
        $employeeId = $_POST['employeeId'];
        $employeeName = $_POST['employeeName'];
        $designation = $_POST['designation'];
        $employeeEmail = $_POST['employeeEmail'];
        $employeePhone = $_POST['employeePhone'];
        $employeeAddress = $_POST['employeeAddress'];

        // Insert query
        $sql = "INSERT INTO employees (employee_id, name, designation, email, phone, address) 
                VALUES (:employeeId, :employeeName, :designation, :employeeEmail, :employeePhone, :employeeAddress)";
        
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':employeeId', $employeeId);
        $stmt->bindParam(':employeeName', $employeeName);
        $stmt->bindParam(':designation', $designation);
        $stmt->bindParam(':employeeEmail', $employeeEmail);
        $stmt->bindParam(':employeePhone', $employeePhone);
        $stmt->bindParam(':employeeAddress', $employeeAddress);

        // Execute query
        $stmt->execute();

        // Redirect to home.html
        header("Location: home.html");
        exit(); // Ensure the script stops executing after redirection
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
