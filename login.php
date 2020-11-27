<?php
require("includes/common.php");
if(isset($_SESSION['email'])){
  header('location:home.php');
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      <title>Melody|Login Page</title>
    <link href="Style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         <form method="POST" action="login-submit.php">
        <div class="form-group">
      <p>Don't have an account?<a href="signup.php">Register</a></p>
       <label><input type="email" class="form-control" placeholder="Email" name="email" required="true"></label><br><br>
       <label><input type="password" class="form-control" placeholder="Password" name="password" required="true"></label>
       <div class="form_group">
        <?php
         if(isset($_GET['m1'])){
               echo $_GET['m1'];
              }
              ?>
      
       <div><button type="submit" class="btn btn-primary " >Login</button></div>
       </div>
      </form> 
        </div>
       
          <a href="forgot.php">Forgot Password?</a>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>