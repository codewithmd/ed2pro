<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Categories</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="admin_index.php">Admin Panel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="admin_index.php">Dashboard</a></li>
            <li class="active"><a href="categories.html">Categories</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Admin</a></li>
            <li><a href="login.php">Logout <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Create Content
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a type="button" data-toggle="modal" data-target="#addQuestion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp;Add Question</a></li>
                  <li><a type="button" data-toggle="modal" data-target="#addCategory" href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp; Add Category</a></li>
                  <li><a type="button" data-toggle="modal" data-target="#addUser" href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;Add User</a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="admin_index.php">Dashboard </a></li>
          <li class="active">Categories</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="admin_index.php" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>

              <a href="categories.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Categories <span class="badge">&nbsp; 6 &nbsp;</span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">&nbsp; 0 &nbsp;</span></a>
            </div>


          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Categories</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Posts...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>C Programming</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Nov 11, 2017</td>
                        <td><a class="btn btn-default" href="edit.php">Manage &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a class="btn btn-danger" href="#">Delete &nbsp;<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></td>
                      </tr>
                      <tr>
                        <td>Java Programming</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Nov 11, 2017</td>
                        <td><a class="btn btn-default" href="edit.php">Manage &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a class="btn btn-danger" href="#">Delete &nbsp;<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></td>
                      <tr>
                          <td>Php Prohramming</td>
                          <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                          <td>Nov 11, 2017</td>
                          <td><a class="btn btn-default" href="edit.php">Manage &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a class="btn btn-danger" href="#">Delete &nbsp;<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></td>
                      </tr>
                      <tr>
                        <td>Html 5</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Nov 11, 2017</td>
                        <td><a class="btn btn-default" href="edit.php">Manage &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a class="btn btn-danger" href="#">Delete &nbsp;<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></td>
                      </tr>
                      <tr>
                        <td>Programming Facts</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Nov 11, 2017</td>
                        <td><a class="btn btn-default" href="edit.php">Manage &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a class="btn btn-danger" href="#">Delete &nbsp;<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></td>
                      </tr>
                      <tr>
                        <td>Special Stuffs</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Nov 11, 2017</td>
                        <td><a class="btn btn-default" href="edit.php">Manage &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a class="btn btn-danger" href="#">Delete &nbsp;<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></td>
                      </tr>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Add Question -->
    <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Add Question</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
      						   <select class="form-control selectpicker" data-style="btn-primary" autofocus name="">
        								<option class="form-control" value="" selected disabled>Choose Category</option>
        								<option value="">C Programming</option>
        								<option value="">Java Programming</option>
        								<option value="">Php Programming</option>
        								<option value="">Html 5</option>
      						  </select>
      				</div>
              <div class="form-group">
                <label>Question Title</label>
                <input type="text" class="form-control" placeholder="Write The Question..">
              </div>
              <div class="form-group">
                <label>Option-1</label>
                <input type="text" class="form-control" placeholder="Option 1..">
              </div>
              <div class="form-group">
                <label>Option-2</label>
                <input type="text" class="form-control" placeholder="Option 2..">
              </div>
              <div class="form-group">
                <label>Option-3</label>
                <input type="text" class="form-control" placeholder="Option 3..">
              </div>
              <div class="form-group">
                <label>Option-4</label>
                <input type="text" class="form-control" placeholder="Option 4..">
              </div>
              <div class="form-group">
                <label>Answer</label>
                <input type="text" class="form-control" placeholder="Correct Answer">
              </div>
              <div class="form-group">
                <label>Answer Description</label>
                <textarea rows="5" cols="100" name="message" class="form-control" id="message" required placeholder="Answer Description" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary main-color-bg">&nbsp; Add &nbsp;</button>
            </div>
          </form>
          </div>
        </div>
    </div>

  <!-- Add Category -->
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Category name</label>
                <input type="text" class="form-control" placeholder="Category..">
              </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary main-color-bg">&nbsp; Add &nbsp;</button>
            </div>
          </form>
          </div>
        </div>
    </div>
  </div>

    <!-- Add user -->
  <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add New User</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Email..">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password..">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary main-color-bg">&nbsp; Add &nbsp;</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript
      ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
