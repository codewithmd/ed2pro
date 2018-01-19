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
      <a class="navbar-brand animated zoomInRight text-primary" id="logo" href="user_index.php"><i class="fas fa-code fa-lg"></i> Ed 2 Pro</a>
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
              <a class="dropdown-item" href="#">C Programming</a>
              <a class="dropdown-item" href="#">JavaScript</a>
              <!-- <a class="dropdown-item" href="#"></a> -->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_explore.php">Explore</a>
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
              <a href="logout.php" class="dropdown-item waves-effect waves-light"><i class="fas fa-sign-out-alt"></i> Sign-Out </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /. Navigation -->

  <div style="margin-top:150px;"></div>
  
  <section>
    <div class="container">
      <div class="row">
  <div class="col-12 col-md-4">
    <div class="card">
    <div class="list-group">
      <a class="list-group-item list-group-item-action" href="user_account.php">Home</a>
      <a class="list-group-item list-group-item-action active bg-info" href="user_account_profile.php">Profile</a>
      <a class="list-group-item list-group-item-action" href="user_account_rank.php">My Rank</a>
      <a class="list-group-item list-group-item-action" href="user_account_changepwd.php">Change Password</a>

    </div>
    </div>
  </div>
  <div class="col-12 col-md-8">
    <div class="card p-4">
    <div class="tab-content">
      <div class="fade show active">
        Profile <br>

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam voluptates ut deleniti, laboriosam nam culpa soluta dicta optio esse perferendis deserunt tenetur nihil unde, architecto quibusdam quo magni molestias. Facilis?
      </div>
      <!-- <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">.profile..</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">..settings.</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div> -->
    </div>
    </div>
  </div>
</div>
    </div>

  </section>



  <div style="margin-top:150px;"></div>

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
