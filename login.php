<?php
session_start();



include 'sql.php';
	if (isset($_POST['submit'])) {
			$username = $_POST['username']; // taking in the username
			$password = $_POST['password']; // taking in un-hashed password
			
		
			if(check_username($username)){
				if(check_password($username, $password)){
					$_SESSION['username'] = $username;
					header('Location: adminhome.php');
				}else{
					echo "<div id='error'>Wrong Password</div>";
				}
			}else{
				echo "<div id='error'>Wrong Username</div>";
			}
		}
		
		function check_username($username){
			include_once 'sql.php';
			$check = "SELECT * FROM Users WHERE BINARY username = BINARY '$username'";
			$check_q = mysql_query($check) or die("<div id='error'>Error on checking Username<div>");
			if (mysql_num_rows($check_q) == 1) { return 1; }else{ return 0; }
		}
		
		function check_password($username,$password){
			include_once 'sql.php';
			echo "<div id='error'>Checking Password for user: '$username'</div>";
			$result = mysql_query("SELECT * FROM Users WHERE BINARY username = BINARY '$username'"); // fetches the resource # (pointer to the line)
			$row = mysql_fetch_row($result); // fetches the entire row
			$info = $row[2]; // fetches the password located at index 2
			if(password_verify($password, $info)){ return 1; }else{ return 0; } // verifys password and acts accordingly
		}
?>

