<!DOCTYPE html>
<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Playfair+Display&family=Roboto+Mono:wght@100&display=swap"
    rel="stylesheet">
  <nav>
    <div class="navbar">
      <div class="user-profile">
        <span class="welcome-message">Welcome, Admin </span>
        <img src="Images/adminpic.jpg" alt="User Profile Picture" class="profile-picture">
      </div>
      <ul class="nav-menu">
        <li><a href="./admin_dashboard.html">Dashboard</a></li>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./index.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin_dashboard.css">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4"></h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <img src="Images/6.jpg">
            <h5 class="card-title">Users</h5>
            <p class="card-text">View and manage users</p><br><br>
            <a href="./manage_index.php" class="btn btn-primary">Go to Users</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <img src="Images/7.jpg">
            <h5 class="card-title">Reports</h5>
            <p class="card-text">Generate reports</p>
            <a href="#" class="btn btn-primary">Go to Reports</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <img src="Images/8.jpg">
            <h5 class="card-title">Google Map</h5>
            <p class="card-text">Generate reports</p><br><br><br>
            <a href="#" class="btn btn-primary">Go to Reports</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="admin_validation.js"></script>



</body>

</html>