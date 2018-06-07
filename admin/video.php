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
            <a href="video.php" class="nav-link active">Videos</a>
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
              <i class="fa fa-user"></i> Welcome <span id="user">Admin</span>
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
          <h1><i class="fa fa-pencil"></i> Videos </h1>
        </div>
      </div>
    </div>
  </header>

  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <!-- <div class="input-group">
            <input type="text" id="searchQuestion" class="form-control" placeholder="Search video">
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- video -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Videos</h4>
            </div>
            <table class="table table-striped" id="questionTable">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th></th>
                </tr>
              </thead>
                <tbody>

                    <?php 

                include './includes/db.inc.php';

                $q2 = "SELECT * FROM `video`,`subject` WHERE `video`.`sub_id` = `subject`.`sub_id`";
                $result = mysqli_query($conn, $q2);
                $totalVideos = mysqli_num_rows($result);

                        while($row = mysqli_fetch_array($result)){
                        echo '<tr>';
        
                        echo '<td>';
                        echo $row['video_id'];
                        echo '</td>';
        
                        echo '<td>';
                        echo $row['video_title'];
                        echo '</td>';
        
                        echo '<td>';
                        echo $row['sub_name'];
                        echo '</td>';
        
                        echo '<td>';
                        echo "<a href='details.php?videoID=".$row['video_id']."' class='btn btn-secondary'>
                        <i class='fa fa-angle-double-right'></i> Details
                    </a>";
                        echo '</td>';
        
                        echo '</tr>';
                        }
                ?>
                    
              </tbody>
            </table>
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

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


</body>
</html>