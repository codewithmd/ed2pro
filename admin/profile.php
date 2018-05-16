<?php
  session_start();

  if (!isset($_SESSION['a_id'])) {

      header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ed2pro Admin Area</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.php" class="navbar-brand">Ed2pro</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="questions.php" class="nav-link">Questions</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.php" class="nav-link">Categories</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.php" class="nav-link">Users</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> Welcome Admin
            </a>
            <div class="dropdown-menu">
              <a href="profile.php" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>
              
            </div>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fa fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-user"></i> Edit Profile</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="index.php" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#passwordModal">
            <i class="fa fa-lock"></i> Change Password
          </a>
        </div>
        <div class="col-md-3">
          <a href="./includes/deleteAdmin.inc.php?adminID=<?php echo $_SESSION['a_id']; ?>" class="btn btn-danger btn-block">
            <i class="fa fa-remove"></i> Delete Account
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- PROFILE EDIT -->
  <section id="profile">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header bg-dark">
              <h4 class="text-light">Edit Profile</h4>
            </div>
            <?php 
              $adminID = $_SESSION['a_id'];
              include_once './includes/db.inc.php';
              $sql = "SELECT * FROM `admin` WHERE `admin_id` = $adminID";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($result);

            ?>
            <div class="card-body">
              <form action="./includes/updateUser.process.php" method="POST" id="updateUserForm">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name']; ?>">
                  <br>
                  <span id="errorName" class="my-2"></span>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" value="<?php echo $row['admin_email']; ?>">
                   <br>
                  <span id="errorEmail" class="my-2"></span>
                </div>
                <div>
                  <input type="hidden" name="adminID" id="adminID" value="<?php echo $adminID; ?>">
                </div>
                <div class="form-group pt-2">
                  <input type="button" id="updateUser" class="btn btn-block btn-success" value="Save Changes">
                </div>
                <div class="form-group py-2">
                  <span id="response"></span>                  
                </div>

              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <footer id="main-footer" class="bg-dark text-white mt-5 p-3">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2018 Ed2pro</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- PASSWORD MODAL -->
  <div class="modal fade" id="passwordModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Change Password</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">

          <form id="updatePasswordForm" action="./includes/updatepassword.process.php" method="POST">
            <div class="form-group">
              <label for="name">Password</label>
              <input type="password" id="pwd" name="pwd" class="form-control">
            </div>
            <div class="form-group">
              <label for="name">Confirm Password</label>
              <input type="password" id="confirmpwd" name="confirmpwd" class="form-control">
            </div>
            <div>
              <input type="hidden" name="adminID" value="<?php echo $adminID; ?>">
            </div>
            <div id="responsePasssword"></div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" id="updatePassword" class="btn btn-primary" value="Update Password"/>
            </div>
          </form>

        </div>
        
      </div>
    </div>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  
  
  
</body>
</html>
