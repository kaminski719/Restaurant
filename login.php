<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	mysql_connect("burrow.soic.indiana.edu","i491u16_mickamin","my+sql=i491u16_mickamin");
	mysql_select_db('Users');
	
	$result = mysql_query("select * from users where username = '$username' and password = '$password'")
		or die("Failed to Query Database ".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password ){
			echo "Login Successful. Welcome ".$row['$username'];
	} else {
			echo "Failed to Login...";
	}
?>
