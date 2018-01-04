<?php
  session_start();

  if (isset($_SESSION['u_id'])) {

      header("Location: user_index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="login into ed2pro.com">
    <meta name="author" content="manoranjan dash">

    <title>Ed2pro.com | Login Here To Explore Our Extensive Features</title>

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- fontawesome CDN -->
        <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

        <!-- Custom Style  -->
        <!-- <link href="css/mdb.min.css" rel="stylesheet"> -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <script src="js/wow.min.js"></script>
            <script>
            new WOW().init();
            </script>

    	<style>
    	/*primary_color: #007bff  */



      </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a  href="index.php class="navbar-brand animated zoomInRight text-primary" id="logo""><i class="fas fa-code fa-lg"></i> &nbsp;Ed 2 Pro</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link animated zoomIn" href="index.php">Learn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link animated zoomIn" href="index.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link animated zoomIn" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="active nav-link animated zoomIn" href="login.php" title="Sign In"><i class="fas fa-sign-in-alt fa-lg"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3 animated zoomIn"> Login Here
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active wow fadeInRightBig">Login</li>
      </ol>


  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Login</h2>
        <p>Fill The Username & Password</p>

        <form action="./includes/login.inc.php" method="POST">
          <div class="form-group animated zoomIn">
            <label for="email">Email Address</label>

            <input type="email" name="email" class="form-control form-control-md" value="" autofocus>
            <span class="invalid-feedback"></span>
          </div>
          <div class="form-group wow zoomIn">
            <label for="password">Password</label>

            <input type="password" name="pwd" class="form-control form-control-md" value="">
            <span class="invalid-feedback"></span>
          </div>
          <div class="form-row">
            <div class="col-sm-12 col-md-6 wow fadeInLeft">

              <input type="submit" name="submit" value="Login" class="btn btn-success btn-block">
            </div>
            <div class="col-sm-12 col-md-6 wow fadeInRight">

              <a href="signup.php" class="btn btn-light btn-block">No account? Register</a>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

    </div>
    <!-- /.container -->

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container wow zoomIn">
        <div class="row">
          <div class="col-12 justify-content-start">
            <p class="m-0 text-white"><i class="fas fa-code fa-lg"></i></p>
            <p class="m-0 text-white">Copyright &copy; Ed2Pro.com 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



  </body>

</html>
