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
  <link href="css/bootstrap.min.css" rel="stylesheet">

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

    /*primary_color: #007bff  */


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
      <a class="navbar-brand animated zoomInRight text-primary" id="logo" href="#nav"><i class="fas fa-code fa-lg"></i> &nbsp;Ed 2 <span class="">Pro</span></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto animated zoomIn">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item dropdown special">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Give Test</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">C Programming</a>
              <a class="dropdown-item" href="#">JavaScript</a>
              <!-- <a class="dropdown-item" href="#"></a> -->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_contact.php">Explore</a>
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
              <a href="#" class="dropdown-item waves-effect waves-light"><i class="fab fa-leanpub"></i> My Course</a>
              <a href="user_account.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i> Account</a>
              <a href="logout.php" class="dropdown-item waves-effect waves-light text-danger"><i class="fas fa-sign-out-alt"></i> Sign-Out </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /. Navigation -->

  <!-- <header>-->
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('./img/slider-0.jpg')">
          <div class="slider-1 carousel-caption d-none d-md-block">
            <h3 class="animated fadeInLeft">Programming..</h3>
            <p class="animated fadeInRight">Learn to code interactively, for free.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./img/slider-2.jpg')">
          <div class="slider-2 carousel-caption d-none d-md-block">
            <h3 class="animated fadeInRight">Change is the end result for all true learning</h3>
            <p class="animated fadeInUpBig">We Love To Work For You</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./img/slider-3.jpg')">
          <div class="slider-3 carousel-caption d-none d-md-block">
            <h3 class="animated fadeInLeft">Ed 2 Pro</h3>
            <p class="animated fadeInRight">The Next Step for Your Career.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
  </header>
  <!-- /. Header -->

  <section>

  </section>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container-fluid wow zoomIn">
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
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- <script src="./js/manualscroll.js"></script> -->
  </body>


  <!-- Smooth Scrooling  -->
  <script>
  $(function() {
    // Smooth Scrolling
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  </script>

  <!-- /.Smooth Scrolling -->

  <!-- Animation -->

	<!-- <link href="css/animate.css" rel="stylesheet"> -->

  <!-- <script src="js/wow.min.js"></script> -->

</html>
