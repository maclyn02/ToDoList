<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $_GET['uname']; ?> Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/icon.jpg">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <style>
            .float{
            	position:fixed;
            	bottom:5%;
            	right:5%;
            	text-align:center;
            	z-index:1;
            }
            .float-btn{
            	border-radius:50px;
            }
        </style>
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
                  <li class="nav-item active dropdown">
                  	<a class="nav-link dropdown-toggle-no-caret" data-toggle="dropdown" data-target="#userMenu" href=""><i class="fas fa-user"></i> <?php echo $_GET['uname'];?></a>
                  	<div class="dropdown-menu" id="userMenu">
                        <a class="dropdown-item" href="reset.php">Change Password</a>
                    </div>
                  </li>
                  <li class="nav-item">
                   	<a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                  </li>
                </ul>
            </div>
        </nav>
        <!-- MAIN NAVBAR END -->
        
        <!-- ADD BUTTON -->
        <div class="dropup float">
            <button type="button" class="btn btn-dark dropdown-toggle-no-caret float-btn" data-toggle="dropdown"><i class="fa fa-plus"></i></button>
            <div class="dropdown-menu">
              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#shop">Shopping List</botton>
              <div class="dropdown-divider"></div>
              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#task">Other Task</button>
            </div>
        </div>
        
        <!-- TASK MODAL BEGIN  -->
        <div class="modal fade" id="task">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Create Task</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="addTask.php" method="post">
                        <div class="form-group">
                          <label for="tname">Task Name:</label><input type="text" class="form-control" id="tname" placeholder="Enter Task Name" name="tname">
                        </div>
                        <div class="form-group">
                          <label for="tdesc">Description:</label><textarea class="form-control" rows="5" id="tdesc"></textarea>
                        </div>
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                          <input id="tlocation" type="text" class="form-control" name="tlocation" placeholder="Enter Task Location">
                        </div>
                        <br>
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                          <input id="cdate" class="form-control" name="cdate" value="<?php echo date('d/m/Y'); ?>" disabled>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <!-- TASK MODAL END  -->
        
        <!-- SHOP MODAL BEGIN  -->
        <div class="modal fade" id="shop">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">SHOPPING LIST</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="addShopList.php" method="post">
                        <div class="form-group">
                          <label for="tname">Task Name:</label><input type="text" class="form-control" id="tname" placeholder="Enter Task Name" name="tname">
                        </div>
                        <div class="form-group">
                          <label for="tdesc">Description:</label><textarea class="form-control" rows="5" id="tdesc"></textarea>
                        </div>
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                          <input id="tlocation" type="text" class="form-control" name="tlocation" placeholder="Enter Task Location">
                        </div>
                        <br>
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                          <input id="cdate" class="form-control" name="cdate" value="<?php echo date('d/m/Y'); ?>" disabled>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <!-- SHOP MODAL END  -->
        
        <!-- TASK LIST -->
        <div style="margin-top:20px;z-index:0">
            <?php
            for($i=1;$i<=20;$i++)
            {
                ?>
                <div id="accordion">
                    <div class="card text-center">
                        <div class="card-header" style="background-color:lightgray;">
                          <a class="card-link" style="text-decoration:none;color:#404040" data-toggle="collapse" href='<?php echo "#data".$i; ?>'>
                            <?php echo $i; ?>
                          </a>
                        </div>
                        <div id='<?php echo "data".$i; ?>' class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <?php echo "This is Card Number : ".$i; ?>
                          </div>
                        </div>
                    </div>                                      
                </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>