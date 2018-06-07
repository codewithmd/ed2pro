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
  <link href="css/userstyle.css" rel="stylesheet">


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
    <div class="container" id="branding">
      <a class="navbar-brand text-primary" id="logo" href="user_index.php"><i class="fas fa-code fa-lg"></i> Ed 2 Pro</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="user_index.php">Home</a>
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
            <a class="nav-link active" href="contact.php">Contact US</a>
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


  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact
        <small>Us</small>
      </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="user_index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Contact Form -->

    <div class="row">
      <div class="col-lg-8 mb-4 animated fadeIn">
        <h3>Send us a Message</h3>
        <form action="./includes/contact.process.php" method="POST" name="sentMessage" id="contactForm">
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" name="name" class="form-control" id="name" required data-validation-required-message="Please enter your name." pattern="[a-zA-Z]+" title="Only Characters" autofocus>
              <p class="help-block" id="errorName"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" name="phone" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." pattern="[789][0-9]{9}" title="Enter Valid Phone Number">
              <p class="help-block" id="errorPhone"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block" id="errorEmail"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="5" cols="100" name="message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="255" style="resize:none" title="Maximum Characters Is 255"></textarea>
              <p class="help-block" id="errorMessage"></p>
            </div>
          </div>

          <!-- For success/fail messages -->

          <button type="submit" name="submit"id="sendContactFormBtn" class="btn btn-primary px-4"><i class="fab fa-telegram fa-lg"></i> Send </button>
          <span id="responseContactForm" class="ml-4"></span>
        </form>
      </div>
      <div class="col-md-4 mb-4 wow fadeInRight">
        <h3>Contact Details</h3>
        <p>
          Christ Polytechnic Institute,
          <br>Rajkot, Gujarat
          <br>
        </p>
        <p>
          <abbr title="Phone">P</abbr>: (+91) 8460214100
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

  <script src="js/script.js"></script>



</body>

</html>
