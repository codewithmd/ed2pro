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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="contact us , contact to ed2pro,ed2pro@yahoo.com">
  <meta name="author" content="manoranjan dash">

  <title>Ed2Pro.com | Contact</title>
  <!-- Preload CSS  -->
  <link rel="stylesheet" href="./css/preload.min.css" />

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- <link href="css/mdb.min.css" rel="stylesheet"> -->

  <!-- Custom Style  -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Font Awesome CDN -->
  <script src="js/fontawesome-all.min.js" charset="utf-8"></script>
  <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script> -->


  <!-- Animate CSS -->
   <link href="css/animate.css" rel="stylesheet">

  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

  <style>
    /*primary_color: #007bff  */
  </style>
  <script>
    window.addEventListener('load', function() {
      var mspreload = document.getElementById("mspreload");
      // document.body.removeChild("mspreloader");
      mspreload.style.display = 'none';
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
    <div class="container">
      <a href="index.php" class="navbar-brand animated zoomInRight text-primary" id="logo"><i class="fas fa-code fa-lg"></i> &nbsp;Ed 2 Pro</a>
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
            <a class="active nav-link animated zoomIn" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
          <a class="nav-link animated zoomIn" href="login.php" title="Sign In"><i class="fas fa-sign-in-alt fa-lg"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /. Navigation -->


  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact
        <small>Us</small>
      </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Contact Form -->

    <div class="row">
      <div class="col-lg-8 mb-4 animated zoomIn">
        <h3>Send us a Message</h3>
        <form action="" method="post" name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" name="username" class="form-control" id="name" required data-validation-required-message="Please enter your name." autofocus>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" name="phone" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="5" cols="100" name="message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" name="submit" class="btn btn-primary wow zoomIn"><i class="fab fa-telegram fa-lg"></i> Send </button>
        </form>
      </div>
      <div class="col-md-4 mb-4 wow fadeInLeft">
        <h3>Contact Details</h3>
        <p>
          Christ Polytechnic Institute,
          <br>Rajkot, Gujarat
          <br>
        </p>
        <p>
          <abbr title="Phone">P</abbr>: (91) 8460214100
        </p>
        <p>
          <abbr title="Email">E</abbr>:
          <a href="mailto:ed2pro@yahoo.com">ed2pro@yahoo.com
            </a>
        </p>
        <p>
          <abbr title="Hours">H</abbr>: 24 / 7 hours
        </p>
      </div>

    </div>
    <!-- /.row -->

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
  <!-- <script src="js/wow.min.js"></script> -->



</body>

</html>
