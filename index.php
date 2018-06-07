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

    <!-- Profile Card Css -->
    <link href="css/rotating-card.css" rel='stylesheet' />
    <!-- Custom Style  -->

    <link href="css/style.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- <script src="js/wow.min.js"></script> -->
    <script>
      // new WOW().init();
    </script>

    <!-- Smooth Scrolling -->
    <script src="./js/scrollreveal.js"></script>



    <style>

      .heading-text {
        font-family: 'Courgette', cursive;

      }
      .carousel-item h3 {
        font-size: 2.8rem !important;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 1px;
      }
      .carousel-item p {
        font-size: 2.4rem !important;
      }
    </style>
    <script>
      window.addEventListener('load', function () {
        var mspreload = document.getElementById("mspreload");
        // document.body.removeChild("mspreloader");
        mspreload.style.display = 'none';
        // setTimeout(mspreload, 4000);
      })
    </script>

  </head>


  <body id="nav">


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
        <a class="navbar-brand text-primary" id="logo" href="#nav">
          <i class="fas fa-code fa-lg"></i> &nbsp;Ed 2 Pro</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#section-0">Learn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="./quiz_app/index.html">Give Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" title="Sign In">
                <i class="fas fa-sign-in-alt fa-lg"></i>
              </a>
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
          <div class="carousel-item active" style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./img/hitesh.jpeg')">
            <div class="slider-1 carousel-caption d-none d-md-block">
              <h3 class="animated fadeInLeft text-white">Programming...</h3>
              <p class="animated fadeInRight text-white">Learn to code interactively, for free.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('./img/computer_edited.jpg')">
            <div class="slider-2 carousel-caption d-none d-md-block">
              <h3 class="animated fadeInRight text-dark">Change is the end result for all true learning</h3>
              <p class="animated fadeInUpBig text-dark">We Love To Work For You</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('./img/s-3.jpeg')">
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
      <div class="welcome">
        <div class="container animated zoomIn">
          <div class="" style="color: #AEB6BF;">
            <h1 class="my-4 text-center heading-text">Built for Programmers..!!</h1>
          </div>
        </div>
        <div id="section-0"></div>

      </div>
    </header>

    <!-- /. Header -->
    <!-- Section 0 -->
    <div id="showcase-0"></div>
    <div class="showcase">
      <div class="container">
        <div class="row">
          <!-- Col-1 -->
          <a href="#" class="text-muted">
            <div class="col-lg-4 cl-mb-4">
              <div class="card card-hover">
                <div class="card-body c">
                  <h4 class="card-title">Javascript</h4>
                  <p class="card-text">The Most Widely Used Technology in 2018</p>
                  <a href="login.php" class="btn btn-primary">Learn</a>
                </div>
              </div>
            </div>
          </a>
          <!-- Col-2 -->
          <a href="#" class="text-muted">
            <div class="col-lg-4 col-mb-4">
              <div class="card card-hover">
                  <div class="card-body java">
                  <h4 class="card-title">Java Programming</h4>
                  <p class="card-text">Write Once , Run Anywhere</p>
                  <a href="login.php" class="btn btn-dark">Learn</a>
                </div>
              </div>
            </div>
          </a>
          <!-- Col-3 -->
          <a href="#" class="text-muted">
            <div class="col-lg-4 col-mb-4">
              <div class="card card-hover">
                <div class="card-body php">
                  <h4 class="card-title">PHP Programming</h4>
                  <p class="card-text">Widely Used Server Side Technology</p>
                  <a href="login.php" class="btn btn-success">Learn</a>
                </div>
              </div>
            </div>
          </a>

        </div>
      </div>
    </div>

    <!-- /.Section-1 -->

    <!-- Section-2 -->
    <div class="showcase showcase-2 mt-4">
      <div class="container">
        <div class="row">
           <!-- Col -6 -->
          <a href="#" class="text-muted">
            <div class="col-lg-4 col-mb-4 m-auto">
              <div class="card card-hover">
                <div class="card-body special">
                  <h4 class="card-title">CSS</h4>
                  <p class="card-text">Used For Beautifull Design</p>
                  <a href="login.php" class="btn btn-success">Learn </a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>


    <!-- /.Section-2 -->
    <div id="profile"></div>
    <!-- profile Cards -->
    <div class="welcome">
      <div class="container pb-12">
        <div>
          <h2 class="my-4 text-primary text-center">
            </h1>
        </div>
      </div>
    </div>

    <div class="section-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="card-container">
              <div class="procard">
                <div class="front">
                  <div class="cover">

                  </div>
                  <div class="user">
                    <img class="img-circle" src="images/no-photo.jpg" />
                    <!-- 160*160 size of photo-->
                  </div>
                  <div class="content">
                    <div class="main">
                      <h3 class="name">Krunal Khatra</h3>
                      <p class="profession">H.O.D.</p>
                      <p class="text-center">"I love to guide you."</p>
                    </div>
                    <div class="footer">
                      Guided
                    </div>
                  </div>
                </div>
                <!-- end front panel -->
                <div class="back">
                  <div class="header">
                    <h5 class="motto">""</h5>
                    <!-- Write Your Motto Here-->
                  </div>
                  <div class="content">
                    <div class="main">
                      <h4 class="text-center">Job Description</h4>
                      <p class="text-center">Web Design, Full Stack Developer , Faculty</p>

                      <div class="stats-container">
                        <div class="stats">
                          <h4>1000</h4>
                          <p>
                            Followers
                          </p>
                        </div>
                        <div class="stats">
                          <h4>100</h4>
                          <p>
                            Following
                          </p>
                        </div>
                        <div class="stats">
                          <h4>60</h4>
                          <p>
                            Projects
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="footer">
                    <div class="social-links text-center">
                      <a href="#" class="facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="google">
                        <i class="fab fa-google"></i>
                      </a>
                      <a href="#" class="twitter">
                        <i class="fab fa-twitter"></i>
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end back panel -->
              </div>
              <!-- end card -->
            </div>
            <!-- end card-container -->
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="card-container">
              <div class="procard">
                <div class="front">
                  <div class="cover">

                  </div>
                  <div class="user">
                    <img class="img-circle" src="images/no-photo.jpg" />
                  </div>
                  <div class="content">
                    <div class="main">
                      <h3 class="name">Manoranjan Dash</h3>
                      <p class="profession">Programmer</p>
                      <p class="text-center"> My World = code(); </p>
                    </div>
                    <div class="footer">
                      Developer
                    </div>
                  </div>
                </div>
                <!-- end front panel -->
                <div class="back">
                  <div class="header">
                    <h5 class="motto">"My World = code(); "</h5>
                  </div>
                  <div class="content">
                    <div class="main">
                      <h4 class="text-center">Job Description</h4>
                      <p class="text-center">Web design,Java,Kotlin, Adobe Photoshop, HTML5, CSS3 and many others...</p>

                      <div class="stats-container">
                        <div class="stats">
                          <h4>826</h4>
                          <p>
                            Followers
                          </p>
                        </div>
                        <div class="stats">
                          <h4>100</h4>
                          <p>
                            Following
                          </p>
                        </div>
                        <div class="stats">
                          <h4>6</h4>
                          <p>
                            Projects
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="footer">
                    <div class="social-links text-center">
                      <a href="#" class="facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="google">
                        <i class="fab fa-google"></i>
                      </a>
                      <a href="#" class="twitter">
                        <i class="fab fa-twitter"></i>
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end back panel -->
              </div>
              <!-- end card -->
            </div>
            <!-- end card-container -->
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="card-container">
              <div class="procard">
                <div class="front">
                  <div class="cover">

                  </div>
                  <div class="user">
                    <img class="img-circle" src="images/no-photo.jpg" />
                  </div>
                  <div class="content">
                    <div class="main">
                      <h3 class="name">Riddhi Bhuva</h3>
                      <p class="profession">Programmer</p>
                      <p class="text-center">"I love to code for you."</p>
                    </div>
                    <div class="footer">
                      Developer
                    </div>
                  </div>
                </div>
                <!-- end front panel -->
                <div class="back">
                  <div class="header">
                    <h5 class="motto">""</h5>
                  </div>
                  <div class="content">
                    <div class="main">
                      <h4 class="text-center">Job Description</h4>
                      <p class="text-center">Web design, Java, Adobe Photoshop, HTML5, CSS3 and many others...</p>

                      <div class="stats-container">
                        <div class="stats">
                          <h4>235</h4>
                          <p>
                            Followers
                          </p>
                        </div>
                        <div class="stats">
                          <h4>114</h4>
                          <p>
                            Following
                          </p>
                        </div>
                        <div class="stats">
                          <h4>10</h4>
                          <p>
                            Projects
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="footer">
                    <div class="social-links text-center">
                      <a href="#" class="facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="google">
                        <i class="fab fa-google"></i>
                      </a>
                      <a href="#" class="twitter">
                        <i class="fab fa-twitter"></i>
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end back panel -->
              </div>
              <!-- end card -->
            </div>
            <!-- end card-container -->
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="card-container">
              <div class="procard">
                <div class="front">
                  <div class="cover">

                  </div>
                  <div class="user">
                    <img class="img-circle" src="images/no-photo.jpg" />
                  </div>
                  <div class="content">
                    <div class="main">
                      <h3 class="name">Shubham Patel</h3>
                      <p class="profession">Programmer</p>
                      <p class="text-center">"I love to code for you."</p>
                    </div>
                    <div class="footer">
                      Developer
                    </div>
                  </div>
                </div>
                <!-- end front panel -->
                <div class="back">
                  <div class="header">
                    <h5 class="motto">""</h5>
                  </div>
                  <div class="content">
                    <div class="main">
                      <h4 class="text-center">Job Description</h4>
                      <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3 and many others...</p>

                      <div class="stats-container">
                        <div class="stats">
                          <h4>235</h4>
                          <p>
                            Followers
                          </p>
                        </div>
                        <div class="stats">
                          <h4>114</h4>
                          <p>
                            Following
                          </p>
                        </div>
                        <div class="stats">
                          <h4>10</h4>
                          <p>
                            Projects
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="footer">
                    <div class="social-links text-center">
                      <a href="#" class="facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="google">
                        <i class="fab fa-google"></i>
                      </a>
                      <a href="#" class="twitter">
                        <i class="fab fa-twitter"></i>
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end back panel -->
              </div>
              <!-- end card -->
            </div>
            <!-- end card-container -->
          </div>

        </div>
      </div>
    </div>

    <!-- /.Profile Card -->

    <!-- Footer -->
    <footer class="py-5 bg-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col-12 justify-content-start footer">
            <p class="m-0 text-white">
              <i class="fas fa-code fa-lg"></i>
            </p>
            <p class="m-0 text-white text">Copyright &copy; Ed2Pro.com 2017</p>
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
    $(function () {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
          this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
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

  <!-- Profile Card Rotate -->
  <script type="text/javascript">
    $().ready(function () {
      $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn) {
      var $card = $(btn).closest('.card-container');
      console.log($card);
      if ($card.hasClass('hover')) {
        $card.removeClass('hover');
      } else {
        $card.addClass('hover');
      }
    }
  </script>
  <!-- /.Profile Card Rotate -->


  <!-- Animation -->

  <!-- <link href="css/animate.css" rel="stylesheet"> -->

  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

  </html>