<?php
  session_start();

  if (!isset($_SESSION['u_id'])) {

      header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Programming,learn code online">
  <meta name="author" content="Manoranjan Dash">

  <title>Welcome | Ed2pro.com</title>
  <!-- Preload CSS  -->
  <link rel="stylesheet" href="./css/preload.min.css" />

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- MDB CSS -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Courgette|Lato|Montserrat|Muli|Open+Sans|Roboto|Roboto+Slab|Ubuntu" rel="stylesheet">


  <!-- Font Awesome CDN -->
  <script src="js/fontawesome-all.min.js" charset="utf-8"></script>
  <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script> -->

  <!-- Custom Style  -->

  <link href="css/style.css" rel="stylesheet">

  <link href="css/userstyle.css" rel="stylesheet">

  <script>
    // new WOW().init();
  </script>

  <!-- Smooth Scrolling -->
  <script src="./js/scrollreveal.js"></script>



  <style>

    .list-group-item {
      color:  #000;
    }
    
  </style>

  <script>
    window.addEventListener('load', function() {
      var mspreload = document.getElementById("mspreload");
      // document.body.removeChild("mspreloader");
      mspreload.style.display = 'none';
      // setTimeout(mspreload, 4000);
    })

  </script>

</head>


<body>
  <!-- PreLoader -->
  <div class="container">
    <div id="mspreload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.PreLoader -->

  <!-- Navigation -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container" id="branding">
      <a class="navbar-brand animated zoomInRight text-primary" id="logo" href="user_index.php"><i class="fas fa-code fa-lg"></i> &nbsp;Ed 2 <span class="">Pro</span></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto animated zoomIn">
          <li class="nav-item">
            <a class="nav-link active" href="user_index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Give Test</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class='dropdown-item' target='_blank' href="test.php">Test Your Programming</a>
                                   
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorials</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php 
               
                include './includes/db.inc.php';
                $q1 = "SELECT * FROM `subject`";

                $result = mysqli_query($conn, $q1);
                while($row = mysqli_fetch_array($result)){
                    echo "<a class='dropdown-item' href='tutorials.php?subID=".$row['sub_id']."'>".$row['sub_name']."</a>";
                }
              ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact US</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link waves-effect waves-light">
              0
              <i class="fa fa-envelope"></i>
            </a>
          </li>

          <li class="nav-item avatar dropdown">
            <a href="" class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="images/no-photo.jpg" width="30" height="30" alt="" class="img-fluid rounded-circle z-depth-0">

            </a>

            <div class="dropdown-menu dropdown-menu-right special" aria-labelledby="navbarDropdownMenuLink-5" style="position: absolute;">

              <a href="user_account.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i> Account</a>
              <a href="logout.php" class="dropdown-item waves-effect waves-light"><i class="fas fa-sign-out-alt"></i> Sign-Out </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /. Navigation -->

  <div style="margin-top:150px;"></div>

  <!-- Tabs -->
  <?php     
    $userid = $_SESSION['u_id'];
    $sql = "SELECT * FROM `users` WHERE `user_id` = $userid";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $hashedPwd = $row['user_password'];

    // $md5 = md5($pwd);
    // $sha1 = sha1($md5);
    // $crypt = crypt($sha1, 'Ed');
    // $password = $crypt;
    
  ?>
    
<section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card">
          <div class="list-group nav-tabs nav" id="myTab" role="tablist">
         
          
            <a class="list-group-item ripple active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>

            <a class="list-group-item ripple" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>

            <!-- <a class="list-group-item ripple" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Progress</a> -->

            <a class="list-group-item ripple" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
          </div>
          </div>
        </div>
        <div class="col-12 col-md-8">
          <div class="card ripple p-4">
          <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="">
                  <span class="lead">Hello,</span>
                  <h3><?php echo $row['user_name']; ?></h3>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                <form action="./includes/updateuser.process.php"method="POST" id="updateUserForm">
                  <div class="form-group">
                    <label for="name"></label>
                    <input type="text" name="name" id="name" value="<?php echo $row['user_name']; ?>">
                    <small class="text-danger" id="errorName"></small>
                  </div>
                  <div class="form-group">
                    <label for="email"></label>
                    <input type="email" name="email" id="email" value="<?php echo $row['user_email']; ?>">
                    <small id="errorEmail"></small>
                  </div>
                  <div>
                    <input type="hidden" name="userID" value="<?php echo $userid; ?>"> 
                  </div>
                  <div class="form-group">
                    <button type="submit" id="updateUserBtn" class="btn btn-success btn-save" style="width:250px;"> Save Changes </button>
                    <small id="responseUser"></small>
                  </div>
                </form>
  
            </div>

            <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <h6 class="h4 text-danger text-uppercase">Congrats!</h6>
            <h3>Your Rank on <span class="text-primary">Ed2pro.com</span> is <span id"rank" class="badge badge-pill badge-success px-4 py-2">10</span></h3>
            </div> -->

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <form id="changePasswordForm" action="./includes/changepassword.process.php" method="POST">
                  
                  <div class="form-group">
                    <label for="password">Enter Old Password</label>
                    <input type="password" name="oldpwd" id="oldpwd">
                    <small id="errorOldPwd"></small>
                  </div>
                  <div class="form-group">
                    <label for="password">Enter New Password</label>
                    <input type="password" name="newpwd" id="newpwd">
                    <small id="errorNewPwd"></small>
                    
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="dbhashedpwd" id="userpwd" value="<?php echo $hashedPwd; ?>">
                    <input type="hidden" name="uid" id="uid" value="<?php echo $userid; ?>">
                  </div>
                  <div class="form-group">
                    <button type="submit" id="changePasswordBtn" class="btn btn-success btn-save" style="width:250px;">Change Password</button>
                    <small id="responsePwd"></small>
                    
                  </div>
                  
                </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

  </section>



  <div style="margin-top:150px;"></div>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 justify-content-start">
            <p class="m-0 text-white"><i class="fas fa-code fa-lg"></i></p>
            <p class="m-0 text-white">Copyright &copy; Ed2Pro.com 2017</p>
          </div>
        </div>
      </div>
    </footer>
<!--  /.Footer -->
    <!-- Bootstrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="js/mdb.min.js"></script> -->
    <!-- <script src="./js/manualscroll.js"></script> -->
    <script src="js/script.js"></script>
  </body>

  <script>
  
  </script>
  <!-- Animation -->

	<!-- <link href="css/animate.css" rel="stylesheet"> -->

  <!-- <script src="js/wow.min.js"></script> -->

</html>
