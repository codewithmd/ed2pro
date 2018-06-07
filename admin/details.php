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
            <a href="video.php" class="nav-link">Videos</a>
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
              <i class="fa fa-user"></i> Welcome
              <span id="user">Admin</span>
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
          <h1> Question</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-4 mr-auto">
          <a href="index.php" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Video</h4>
            </div>

            <?php
              include './includes/db.inc.php';
              $videoID = $_REQUEST['videoID'];

              // $q1 = "SELECT * FROM `question` WHERE `que_id` = $questionID";
              $q1 = "SELECT * FROM `video`,`subject` WHERE `video`.`video_id` = $videoID AND `video`.`sub_id` = `subject`.`sub_id`";
              $result = mysqli_query($conn, $q1);
              $row = mysqli_fetch_assoc($result);

              $subjectID = $row['sub_id'];
              
            ?>
            <div class="card-body">
              <form id="updateQuestionForm" action="./includes/updatequestion.process.php" method="POST">
                <div class="form-group">
                  <label for="title">Video Title</label>
                  <input type="text" id="title" class="form-control" value="<?php echo $row['video_title'];?>">
                </div>
                 <div class="form-group">
                  <label for="title">Change Url</label>
                  <input type="text" id="link" class="form-control" value="<?php echo $row['video_link'];?>">
                </div>
                <div class="form-group">
                  <label for="title">Category</label>
                  <select class="form-control" name="subject">
                    <?php 
                      echo "<option value=". $row['sub_id']." selected >". $row['sub_name'] . "</option>";
                    ?>
                    
                  </select>
                </div>
               
                <div class="form-group">
                  <input type="submit" class="btn btn-success px-4 mr-4" value="Save Changes" id="updateVideo">
                  <button type="button" class="btn btn-danger px-4 mr-4" id="deleteVideo">Delete Video</button>
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


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/main.js"></script> -->
  
  <script>
  
  var videoID = "<?php echo $videoID; ?>";
  var subjectID = "<?php echo $subjectID; ?>";
  function deleteVideo(e){
    $.ajax({
          url: './includes/deletevideo.process.php',
          method: "POST",
          data: {
            videoID: videoID
          }
                   
      })
      .done(function(data){
        $('form').trigger("reset");
        $('#response').html('<spna class="text-success">'+ data +'</span>');
        setTimeout(function(){
          $('#response').fadeOut('slow');
        },3000);
        console.log(data);
      })
      .fail(function(){
        console.log('Error!');
      })
    
  }
  function updateVideo(e){
    e.preventDefault();
    let title = $('#title').val();
    let link = $('#link').val();
    
   $.ajax({
          url: './includes/updatevideo.process.php',
          method: "POST",
          data: {
            videoID : videoID,
            subID : subjectID,
            title: title,
            link : link
          }
                   
      })
      .done(function(data){
        $('form').trigger("reset");
        $('#response').html('<spna class="text-success">'+ data +'</span>');
        setTimeout(function(){
          $('#response').fadeOut('slow');
        },3000);
        console.log(data);
      })
      .fail(function(){
        console.log('Error!');
      })
      return false;
  }
    $(document).ready(function(){
      $('#deleteVideo').on('click', deleteVideo);
      $('#updateVideo').on('click', updateVideo);
    });

  </script>
</body>

</html>