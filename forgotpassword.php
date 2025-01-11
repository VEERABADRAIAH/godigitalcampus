<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection details
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "employee";

    // Create connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Hash the new password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Update password in the database
    $sql = "UPDATE users SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashedPassword, $email);

    if ($stmt->execute()) {
        echo "<div style='text-align: center; margin-top: 20px;'>
                <p style='color: green;'>Password updated successfully!</p>
                <a href='forgotpassword.html'>Back</a>
              </div>";
    } else {
        echo "<div style='text-align: center; margin-top: 20px;'>
                <p style='color: red;'>Error updating password. Please try again.</p>
                <a href='forgotpassword.html'>Back</a>
              </div>";
    }

    $stmt->close();
    $conn->close();
}
?>
