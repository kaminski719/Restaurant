<?php 
session_start();

if(!isset($_SESSION['$auth'])){
	header("Location: restricted.php");
	die();
}

include('adminheader.php'); ?>
<br>
<h1> Admin Home </h1>
<br>
<center><h2>From here you can edit the Menu, Events and About Us pages!</h2></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php'); ?>