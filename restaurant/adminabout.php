<?php 
session_start();

if(!isset($_SESSION['$auth'])){
	header("Location: restricted.php");
	die();
}

include('adminheader.php'); ?>
<br>
<h1> Admin About </h1>
<br>
<center><h3> Here you can edit what displays on the "About Us" page for Customers to see. </h3></center>

<?php
	session_start();
	include('sql.php');
	
	if(isset($_POST['update'])){
	$UpdateQuery = "UPDATE About SET info='$_POST[about]' WHERE id='1'";
	mysql_query($UpdateQuery, $connect);
	};
	
	$sql = "SELECT info FROM About";
	$data = mysql_query($sql, $connect);
	echo"<center><table width='75%' style='border: solid 3px black'>
		<th>What is Capstone Restaurant all about?</th></center>";
	while($res=mysql_fetch_array($data)){
		echo "<form action=adminabout.php method=post>";
		echo "<tr>";
		echo "<td><textarea name='about' cols='100' rows='15'>" . $res['info'] . "</textarea></td>";
		echo "<td>" . "<input type=submit name=update value='Update About Us'" . " </td>";
		echo "</tr>";
		echo "</form>";
	}
	echo'</table></center>';
?>
<br>
<br>
