<?php
session_start();
if (!isset($_SESSION['user_role'])) {
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">VHV Digital Campus Solutions Private Limited </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto"> <!-- Added mx-auto to center the navbar items -->
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
        </ul>
      </div>
      
      <div class="d-flex" id="navbar-right">
          <div class="role text-center text-white mt-3 me-3">
    <?php 
    if (isset($_SESSION['user_role'])) 
        echo '<span class="welcome">Welcome&nbsp;</span>'.$_SESSION['user_role']; 
        echo '<span class="welcome">!!</span>';
    ?>
</div>
      <?php if (isset($_SESSION['user_role'])) {  ?>
        
        <div class="navbar-right">
            <button class="btn btn-light dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-4"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="/profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="logout.php" >Logout</a></li>
            </ul>
        </div>
    </div>
	  	<?php } 
	  	else { ?>
	  		<a id = "login"  href="login.php"><i class="fa fa-sign-in"></i> Login</a>
	  	<?php } ?>
	  
    </div>
  </nav>

  <div class="d-flex">
    <div class="bg-light" style="width: 200px; height: 100vh;">
    
      <div id="sidebar" class="p-3">
      
          <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li></ul>
          <ul class="nav flex-column">
          <?php
          if (isset($_SESSION['user_role'])) {
            $role = $_SESSION['user_role'];

    if ($role == 'admin') {
        include('Admin/admin.php');
    } elseif ($role == 'hr') {
        include('HR/hr.php');
    } elseif ($role == 'user') {
        include('User/user.php');
    }
} else {
   
}
?>

          </ul>
          
      </div>
    </div>
    <div class="flex-grow-1 p-4">
      <h1>Your Partner in Campus Digitalization.</h1>
      <p>  </p>
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-3">
    &copy;  2024 VHV Digital Campus Solutions Private Limited. All rights reserved..
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  

</body>
</html>