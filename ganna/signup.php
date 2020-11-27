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

     	<title>Melody|SignUp Page</title>
    <link href="Style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    
<!-- it's a navbar -->

    <?php
    include("includes/header.php");
    ?>
   

	<div class="container">
	 <div class="row">
	   <div class="col-xs-4 offset-5">
	   	<?php
	 		 if(isset($_GET["m4"])){
	 		 	echo $_GET["m4"];
	 		 }
	 		 ?>
	 			<h1>SIGN UP</h1>
	  	<form method="POST" action="signup-submit.php">
	  		<div class="form-group">
	 		 <label><input type="text" class="form-control" placeholder="Name" name="name" required="true" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+"></label>
	 		</div>
	 		<div class="form-group">
	 		 <label><input type="email" class="form-control" placeholder="Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></label>
	 		 </div>
	 		 <?php
	 		 if(isset($_GET["m1"])){
	 		 	echo $_GET["m1"];
	 		 }
	 		 ?>
	 		 <div class="form-group">
	 		 <label><input type="password" class="form-control" placeholder="Password" name="password" required="true" pattern=".{6,}"></label>
	 		</div>
	 		<div class="form-group">
	 		 <label><input type="number" class="form-control" placeholder="Contact" name="contact" required="true" pattern=""></label>
	 		 </div>
	 		 <?php
	 		 if(isset($_GET['m2'])){
	 		 	echo $_GET['m2'];
	 		 }
	 		 ?>
	 		 <div class="form-group">
             <label><input type="text" class="form-control" placeholder="City" name="city" ></label>
             </div>
             <div class="form-group">
	 		 <label><input type="text" class="form-control" placeholder="Address" name="address" ></label>
	 		</div>
	 		<div class="form-group">
	 		 <div><button type="submit" value="submit" class="btn btn-primary" >Submit</button>
	 		 </div>
	 	   </div>
	  	</form>
	  </div>
	 </div>
	</div><?php
    include("includes/footer.php");
    ?>

       <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>	
</html>	