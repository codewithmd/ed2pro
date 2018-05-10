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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark p-0">
        <div class="container">
            <a href="index.php" class="navbar-brand">Ed2pro</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="index.php" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="questions.php" class="nav-link">Questions</a>
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
                            <a href="settings.php" class="dropdown-item">
                                <i class="fa fa-gear"></i> Settings
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
                    <h1>
                        <i class="fa fa-gear"></i> Dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="action" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-primary btn-block shadow-1" data-toggle="modal" data-target="#addPostModal">
                        <i class="fa fa-plus"></i> Add Question
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger btn-block shadow-1" data-toggle="modal" data-target="#addVideoModal">
                        <i class="fa fa-plus"></i> Add Video
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block shadow-1" data-toggle="modal" data-target="#addCategoryModal">
                        <i class="fa fa-plus"></i> Add Category
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-warning btn-block shadow-1" data-toggle="modal" data-target="#addUserModal">
                        <i class="fa fa-plus"></i> Add User
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- QUESTIONS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Questions</h4>
                        </div>
                        <table class="table table-striped">
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

                            $q2 = "SELECT * FROM `question`,`subject` WHERE `question`.`sub_id` = `subject`.`sub_id`";
                            $result = mysqli_query($conn, $q2);
                            $totalQuestions = mysqli_num_rows($result);

                                    while($row = mysqli_fetch_array($result)){
                                    echo '<tr>';
                    
                                    echo '<td>';
                                    echo $row['que_id'];
                                    echo '</td>';
                    
                                    echo '<td>';
                                    echo $row['que_title'];
                                    echo '</td>';
                    
                                    echo '<td>';
                                    echo $row['sub_name'];
                                    echo '</td>';
                    
                                    echo '<td>';
                                    echo "<a href='details.php?questionID=".$row['que_id']."' class='btn btn-secondary'>
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
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-white mb-3">
                        <div class="card-body">
                            <h3>Questions</h3>
                            <h1 class="display-4">
                                <i class="fa fa-pencil"></i> 6
                            </h1>
                            <a href="questions.php" class="btn btn-outline-light btn-sm px-4">View</a>
                        </div>
                    </div>

                    <div class="card text-center bg-success text-white mb-3">
                        <div class="card-body">
                            <h3>Categories</h3>
                            <h1 class="display-4">
                                <i class="fa fa-folder-open-o"></i> 4
                            </h1>
                            <a href="categories.php" class="btn btn-outline-light btn-sm px-4">View</a>
                        </div>
                    </div>

                    <div class="card text-center bg-warning text-white mb-3">
                        <div class="card-body">
                            <h3>Users</h3>
                            <h1 class="display-4">
                                <i class="fa fa-users"></i> 2
                            </h1>
                            <a href="users.php" class="btn btn-outline-light btn-sm px-4">View</a>
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


    <!-- QUESTION MODAL -->
    <div class="modal fade" id="addPostModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Question</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./includes/addquestion.process.php" method="POST" id="addQuestionForm" class="ajax">

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="sub" name="sub">
                                <option value="" selected disabled>Select Subject</option>
                                <?php 
                            
                            $q1 = "SELECT * FROM `subject`";

                            $result = mysqli_query($conn, $q1);
                            while($row = mysqli_fetch_array($result)){
                                echo "<option value='".$row[sub_id]."'>".$row[sub_name]."</option>";
                            }
                        ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Question</label>
                            <input type="text" id="quetitle" name="quetitle" class="form-control" placeholder="Question">
                        </div>

                        <div class="form-group">
                            <label for="opt-1">Option-1</label>
                            <input type="text" id="opt1" name="opt1" class="form-control" placeholder="Option 1..">
                        </div>
                        <div class="form-group">
                            <label for="opt-2">Option-2</label>
                            <input type="text" id="opt2" name="opt2" class="form-control" placeholder="Option 2..">
                        </div>
                        <div class="form-group">
                            <label for="opt-3">Option-3</label>
                            <input type="text" id="opt3" name="opt3" class="form-control" placeholder="Option 3..">
                        </div>
                        <div class="form-group">
                            <label for="opt-4">Option-4</label>
                            <input type="text" id="opt4" name="opt4" class="form-control" placeholder="Option 4..">
                        </div>
                        <div class="form-group">
                            <label for="ans">Answer</label>
                            <input type="text" id="answer" name="answer" class="form-control" placeholder="Enter the correct option number">
                        </div>
                        <div class="form-group">
                            <label for="ans-desc">Answer Description</label>
                            <textarea name="answerdesc" id="answerdesc" class="form-control" placeholder="Describe Your Answer"></textarea>
                        </div>
                        <div id="responseQuestion"></div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" id="addQuestion" name="questionSubmit" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- CATEGORY MODAL -->
    <div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Add Category</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./includes/addsubject.process.php" method="POST" id="addSubjectForm" class="ajax">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="subject" id="subject" class="form-control" autofocus>
                        </div>
                        <div id="responseSubject"></div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary closeModal" data-dismiss="modal">Close</button>
                            <input type="submit" id="addSubject" value="ADD" class="btn btn-success">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- USER MODAL -->
    <div class="modal fade" id="addUserModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Add User</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./includes/adduser.process.php" method="POST" id="addUserForm" class="ajax">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" name="pwd" id="pwd" class="form-control">
                        </div>
                        <div id="responseUser"></div>
                        <div class="modal-footer">

                            <button class="btn btn-secondary closeModal" data-dismiss="modal">Close</button>
                            <input type="submit" id="addUser" value="ADD" class="btn btn-warning">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- VIDEO MODAL -->
    <div class="modal fade" id="addVideoModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Add Video</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./includes/addvideo.process.php" method="POST" id="addVideoForm" class="ajax">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="videosub" name="videosub">
                                <option value="" selected disabled>Select Subject</option>
                                <?php 
                            include './includes/db.inc.php';
                            $q1 = "SELECT * FROM `subject`";

                            $result = mysqli_query($conn, $q1);
                            while($row = mysqli_fetch_array($result)){
                                echo "<option value='".$row[sub_id]."'>".$row[sub_name]."</option>";
                            }
                        ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" id="videoname" name="videoname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="url">Video URL</label>
                            <input type="text" id="videolink" name="videolink" class="form-control">
                        </div>
                        <div id="responseVideo"></div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" id="addVideo" name="addVideo" value="ADD" class="btn btn-danger">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script> -->
    <script>
        // CKEDITOR.replace('editor1');
    </script>
    <script src="js/main.js"></script>
</body>

</html>