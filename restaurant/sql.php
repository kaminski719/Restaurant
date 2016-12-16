<?php
	$host = 'db.soic.indiana.edu';
	$user = 'i491u16_mickamin';
	$db = 'i491u16_mickamin';
	$pass = 'my+sql=i491u16_mickamin';
	
$connect = @mysql_connect($host, $user, $pass) or die('Could not connect to database...');
$select = @mysql_select_db($db, $connect) or die('That database could not be found.');
?>