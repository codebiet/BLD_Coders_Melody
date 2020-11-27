<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:home.php');
}
session_destroy();
header('location:home.php');
?>