<?php 
session_start();

if(!isset($_SESSION['$auth'])){
	header("Location: restricted.php");
	die();
}
include('adminheader.php'); ?>
<br>
<h1> Admin News </h1>
	
<?php include('footer.php'); ?>