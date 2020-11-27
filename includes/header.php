<?php
require("includes/common.php");
include("login.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>MUSIC PLAYER</title>
    <link href="Style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    
<!-- it's a navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" style="color:red;">Melody</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="browse.php">Browse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="discover.php">Discover </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Radio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ganna.php" tabindex="-1" aria-disabled="true">my music</a>
            </li>
          </ul>
          <?php
            if(isset($_SESSION['email']))
             { ?>
              
              <a class="btn btn-outline-danger mr-md-5 ml-md-5" href="logout.php">Logout</a> 
              <form class="form-inline my-2 my-lg-0">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> 
              <?php
             }
                  else { 
                 ?>
            
            <a class="btn btn-outline-danger mr-md-5 ml-md-5" href="#" data-toggle="modal" data-target="#myModal">Login</a>
            <a class="btn btn-outline-danger mr-md-5 ml-md-5" href="signup.php">Sign up</a>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <?php 
                } 
          ?> 
        </div>
      </nav>
   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>










  		 	