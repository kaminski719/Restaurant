<?php
session_start();
include 'login.php';
if(!isset($_SESSION['username'])){
	header("loginhere.php");
}

?>

<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<title>Restaurant</title>
</head>
<body>
	<div id="header">
    	<div class="login" align="right">
        	<a href="index.php">Logout</a>
      	</div> 
    	<center><p><h1>CAPSTONE RESTAURANT</h1></p></center>
    </div>
    
    <center>
        <div class="navbar" align="center">
            <div class="navlink">
                <a href="adminhome.php">HOME</a>
            </div>
            <div class="navlink">
                <a href="adminmenu.php">MENU</a>
            </div>
            <div class="navlink">
                <a href="news.php">NEWS</a>
            </div>
            <div class="navlink">
                <a href="events.php">EVENTS</a>
            </div>
            <div class="navlink">
                <a href="about.php">ABOUT US</a>
            </div>
            <div class="navlink">
                <a href="contact.php">CONTACT US</a>
            </div>
        </div>
    </center>
