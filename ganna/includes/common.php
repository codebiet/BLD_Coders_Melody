<?php
ob_start();
     $con=mysqli_connect("localhost","root","","music") or die(mysqli_error($con));
    if(!isset($_SESSION)){
       session_start();
     }
?> 