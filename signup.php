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
        <meta name="description" content="registe in ed2pro.com ">
        <meta name="author" content="manoranjan dash">

        <title>ed2pro.com | Register New Account</title>

        <!-- Bootstrap CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">

        <!-- fontawesome CDN -->
        <script src="js/fontawesome-all.min.js" charset="utf-8"></script>
        <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script> -->


        <!-- Custom Style  -->
        <!-- <link href="css/mdb.min.css" rel="stylesheet"> -->
        <link href="./css/style.css" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="./css/animate.css" rel="stylesheet">

        <script src="./js/wow.min.js"></script>
        <script>
            new WOW().init();

        </script>

        <style media="screen">
            .login-btn {
                width: 100% !important;
                margin: auto !important;
            }

        </style>

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand animated zoomInRight text-primary" id="logo" href="index.php"><i class="fas fa-code fa-lg"></i> &nbsp;Ed 2 Pro</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">
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
        <!-- /. Navigation -->

        <!-- Page Content -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3 animated zoomIn">Create An New Account
                <small></small>
            </h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active wow fadeInRightBig">Register</li>
            </ol>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body bg-light mt-5 animated zoomIn">
                        <h2>Create Account</h2>
                        <p>Fill in this form to register</p>

                        <form action="./includes/signup.inc.php" method="POST">
                            <div class="form-group animated rollIn">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-md" autofocus required>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group wow zoomInUp">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control form-control-md" required>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group wow fadeInLeft">
                                <label for="password">Password</label>
                                <input type="password" name="pwd" id="password" class="form-control form-control-md" pattern=".{6,40}" required title="Please Enter more than 6 characters">
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group wow fadeInRight">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_pwd" id="confirm_password" class="form-control form-control-md" pattern=".{6,40}" required title="Please Enter more than 6 characters">
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-row">
                                <div class="col mt-2 wow fadeInLeft">
                                    <input type="submit" name="submit" value="Register" class="btn btn-success btn-block">
                                </div>
                                <div class="col mt-2 mr-auto wow fadeInLeft">

                                    <a href="login.php" class="btn btn-light btn-block login-btn">Have an account?</a>

                                </div>
                                <!-- <div class="col wow fadeInRight">
                <a href="login.php" class="btn btn-light btn-block">Have an account?</a>
              </div> -->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
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
