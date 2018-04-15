<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="icon" href="images/icon.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    </head>
    
    <body style="font-family:'Merriweather',serif;">
        
        <!-- INFO ALERT  -->
        <div class="myframe alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="fas fa-info-circle"></i> Custom To Do List! Uses Location!
        </div>
        
        <!-- MAIN NAVBAR BEGIN -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <!-- WEBSITE NAME  -->
            <a class="navbar-brand" href="Home.php"><i class="fas fa-tasks"></i> ToDoList</a>
            <!-- COLLAPSED MENU BUTTON -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links" aria-controls="links" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- MENU TARGET/LINKS -->
            <div class="collapse navbar-collapse" id="links">
                <ul class="navbar-nav">
                  <li class="nav-item">
                  	<a class="nav-link" data-toggle="modal" data-target="#reg" href="#"><i class="fas fa-user-plus"></i> Register</a>
                  </li>
                  <li class="nav-item">
                   	<a class="nav-link" data-toggle="modal" data-target="#login" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                  </li>
                </ul>
            </div>
        </nav>
        <!-- MAIN NAVBAR END -->
        
        <!-- LOGIN MODAL BEGIN -->
        <div class="modal fade" id="login">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">LOGIN</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                          <label for="uname">UserName:</label><input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label><input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                         <div class="form-group">
                          <a href="reset.php">Forgot Password?</a>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <!-- LOGIN MODAL END -->
        
        <!-- REGISTER MODAL BEGIN -->
        <div class="modal fade" id="reg">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Sign Up!</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="register.php" method="post">
                        <div class="form-group">
                          <label for="uname">UserName:</label><input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname">
                        </div>
                        <div class="form-group">
                          <label for="email">Email Id:</label><input type="email" class="form-control" id="email" placeholder="Enter Username" name="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label><input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-group">
                          <label for="cpwd">Confirm Password:</label><input type="password" class="form-control" id="cpwd" placeholder="Enter password" name="cpswd">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <!-- REGISTER MODAL END -->
        
        <!-- MAIN MESSAGE -->
        <div class="jumbotron" style="margin-top:20px">
            <h1>Welcome!</h1>
            <h3>Existing User? Login to view you tasks.</h3>
            <h3>Not Registered? <a data-toggle="modal" data-target="#reg" href="#">Click Here</a> to register!</h3>
        </div>
    </body>
</html>