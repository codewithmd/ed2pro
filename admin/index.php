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
                        <a href="login.php" class="nav-link">
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
                    <a href="#" class="btn btn-success btn-block shadow-1" data-toggle="modal" data-target="#addCategoryModal">
                        <i class="fa fa-plus"></i> Add Category
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-warning btn-block shadow-1" data-toggle="modal" data-target="#addUserModal">
                        <i class="fa fa-plus"></i> Add User
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger btn-block shadow-1" data-toggle="modal" data-target="#addVideoModal">
                        <i class="fa fa-plus"></i> Add Video
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS -->
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
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Question 1</td>
                                    <td>CSS</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Question 2</td>
                                    <td>Javascript</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>Question 3</td>
                                    <td>JAVA</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>Question 4</td>
                                    <td>PHP</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>

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
                            <a href="posts.php" class="btn btn-outline-light btn-sm px-4">View</a>
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


    <!-- POST MODAL -->
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
                    <form>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control">
                                <option value="">CSS</option>
                                <option value="">Javascript</option>
                                <option value="">PHP</option>
                                <option value="">Java</option>
                            </select>
                        </div>
                        <!--
<div class="form-group">
    <label for="file">Image Upload</label>
    <input type="file" class="form-control-file">
    <small class="form-text text-muted">Max Size 3mb</small>
</div>
-->
                        <div class="form-group">
                            <label for="title">Question</label>
                            <input type="text" class="form-control" placeholder="Question">
                        </div>

                        <div class="form-group">
                            <label for="opt-1">Option-1</label>
                            <input type="text" class="form-control" placeholder="Option 1..">
                        </div>
                        <div class="form-group">
                            <label for="opt-2">Option-2</label>
                            <input type="text" class="form-control" placeholder="Option 2..">
                        </div>
                        <div class="form-group">
                            <label for="opt-3">Option-3</label>
                            <input type="text" class="form-control" placeholder="Option 3..">
                        </div>
                        <div class="form-group">
                            <label for="opt-4">Option-4</label>
                            <input type="text" class="form-control" placeholder="Option 4..">
                        </div>
                        <div class="form-group">
                            <label for="ans">Answer</label>
                            <input type="text" class="form-control" placeholder="Enter the correct option number">
                        </div>
                        <div class="form-group">
                            <label for="ans-desc">Answer Description</label>
                            <textarea name="editor1" class="form-control" placeholder="Describe Your Answer"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
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
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
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
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Confirm Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
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
                    <form>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control">
                                <option value="">CSS</option>
                                <option value="">Javascript</option>
                                <option value="">PHP</option>
                                <option value="">Java</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="url">Video URL</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-danger" data-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>