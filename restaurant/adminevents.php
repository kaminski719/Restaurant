<?php 

session_start();

if(!isset($_SESSION['$auth'])){
	header("Location: restricted.php");
	die();
}
include("adminheader.php"); ?>
<br>
<h1> Admin Events </h1>
<br>
<center><h3> Here you may Add, Delete, and Edit the content of the Events page!</h3></center>
<br>
<?php
	session_start();
	include('sql.php');
	
	if(isset($_POST['update'])){
	$UpdateQuery = "	UPDATE Events SET id='$_POST[id]', title='$_POST[title]', date='$_POST[date]', location='$_POST[location]', info='$_POST[info]', status='$_POST[status]' WHERE id='$_POST[hidden]'";
	mysql_query($UpdateQuery, $connect);
	};
	
	if(isset($_POST['delete'])){
	$DeleteQuery = "	DELETE FROM Events WHERE id='$_POST[hidden]'";         
	mysql_query($DeleteQuery, $connect);
	};
	
	if(isset($_POST['add'])){
	$AddQuery = "INSERT INTO Events (id, title, date, location, info, status) VALUES ('$_POST[uid]','$_POST[utitle]', '$_POST[udate]', '$_POST[uloc]', '$_POST[uinfo]', '$_POST[ustatus]')";
	mysql_query($AddQuery, $connect);
	};

	
	
	$sql = "SELECT * FROM Events";
	$data = mysql_query($sql, $connect);
	echo"<center><table style='border: solid 3px black'>
		<th>ID</th>
		<th>Title</th>
		<th>Date</th>
		<th>Location</th>
		<th>Description</th>
		<th>Status</th>";
	while($res=mysql_fetch_array($data)){
		echo "<form action=adminevents.php method=post>";
		echo "<tr>";
		echo "<td>" . "<input type=text name=id style='width:50px' value=" . $res['id'] . " </td>";
		echo "<td><input type='text' name='title' value='" . $res['title'] . "'></td>";
		echo "<td><input type='text' name='date' style='width:110px' value='" . $res['date'] . "'></td>";
		echo "<td><input type='text' name='location' value='" . $res['location'] . "'></td>";
		echo "<td><textarea name='info' cols='20' rows='2'>" . $res['info'] . "</textarea></td>";
		echo "<td><input type='text' name='status' style='width:100px' value='" . $res['status'] . "'></td>";
		echo "<td>" . "<input type=hidden name=hidden value=" . $res['id'] . " </td>";
		echo "<td>" . "<input type=submit name=update value='Update Event'" . " </td>";
		echo "<td>" . "<input type=submit name=delete value='Delete Event'" . " </td>";
		echo "</tr>";
		echo "</form>";
	}
	
	echo "<form action=adminevents.php method=post>";
	echo "<tr>";
	echo "<td><input type=text style='width:50px' name=uid></td>";
	echo "<td><input type=text name=utitle></td>";
	echo "<td><input type=text style='width:110px' name=udate value='YYYY-MM-DD'></td>";
	echo "<td><input type=text name=uloc></td>";
	echo "<td><textarea name='uinfo' cols='20' rows='2'></textarea></td>";
	echo "<td><select name=ustatus>
			<option value='PAST'>PAST</option>
			<option value='UPCOMING'>UPCOMING</option>
			</td>";
	echo "<td>" . "<input type=submit name=add value='Add Event'" . " </td>";
	echo "</tr>";
	echo "</form>";
	
	echo'</table></center>';
	
	include('footer.php');
?>
	  