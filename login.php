<?php
session_start();
include 'sql.php';
	if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			chckusername($username, $password);
		}
		function chckusername($username, $password){
			include_once 'sql.php';
			$check = "SELECT * FROM Users WHERE BINARY username = BINARY '$username'";
			$check_q = mysql_query($check) or die("<div id='error'>Error on checking Username<div>");
			if (mysql_num_rows($check_q) == 1) {
				chcklogin($username, $password);
			}
			else{
				echo "<div id='error'>Wrong Username</div>";
			}
		}
		function chcklogin($username, $password){
			$login = "SELECT * FROM Users WHERE BINARY username = BINARY '$username' AND BINARY password = BINARY'$password'";
			$login_q = mysql_query($login) or die('Error on checking Username and Password');
			if (mysql_num_rows($login_q) == 1){
				$_SESSION['username'] = $username;
				
				header('Location: adminhome.php');
			}
			else {
				echo "<div id='error'>Wrong Password </div>"; 
			}
		}
?>

