<?php
session_start();

// Include database connection
include 'db.php'; 

if (isset($_POST['submit'])) {
    // Get email and password from the form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $data['password'])) {
            // Store user data in session
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_email'] = $data['email'];
            $_SESSION['user_role'] = $data['role'];

            echo "Login successful!";
            // Redirect to dashboard or another page
            echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
            exit(); 
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "User not found.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            <h4>Login Form</h4>
          </div>
          <div class="card-body">
            <form  method="POST">
              
              <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password" required>
              </div>
              
              
              <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
