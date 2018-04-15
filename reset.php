<?php $email='mac@mac.com'; ?>
<!DOCTYPE html>
<html>
   <head>
        <title>Reset Password</title>
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
        <div class="container">
            <div class="row">
                <div class="col-xs-1 col-md-4"></div>
                <div class="card text-center col-xs-10 col-md-4">
                    <img class="card-img-top mx-auto" style="width:80%;" src="images/avatar.png" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Reset Via Email?</h4>
                      <p class="card-text">Code to reset your password will be emailed.</p>
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input type="text" name="email" class="form-control" value="<?php echo $email;?>" disabled>
                          <a class="input-group-append btn btn-primary" style="text-decoration:none" href="">Send</a>
                      </div>
                      <br>
                      <div class="input-group">
                          <input type="text" name="code" class="form-control" placeholder="Enter The Code">
                          <a class="input-group-append btn btn-primary" style="text-decoration:none" href="verify.php">OK!</a>
                      </div>
                      <br>
                      <div class="card-footer">
                        <h6 class="text-muted">OR</h4>
                        <a href="contactUs" class="btn btn-primary">Contact Us</a> 
                      </div>
                    </div>
                 </div>
                 <div class="col-xs-1 col-md-4"></div>
            </div>
        </div>
    </body>
</html>