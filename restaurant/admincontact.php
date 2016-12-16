<?php 
session_start();

if(!isset($_SESSION['$auth'])){
	header("Location: restricted.php");
	die();
}
include('adminheader.php'); ?>
<br>
<h1> Admin Contact Us  </h1>
<br>
<center><h3>There is nothing to do on this page as an Admin. Check the Capstone Restaurant Email to see if we've been contacted by our Customers!</h3></center>
<br>
<br>
<br>
	
<?php include('footer.php'); ?>