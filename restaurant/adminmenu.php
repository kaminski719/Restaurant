<?php 
session_start();
if(!isset($_SESSION['$auth'])){
	header("Location: restricted.php");
	die();
}

include('adminheader.php');
?>
<br>
<br>
<h1>ADMIN MENU</h1>
<br>
<center><h3> Here you may Add, Delete, and Edit the items displayed on the Menu page!</h3></center>
<br>
<?php
	include('sql.php');
	
	if(isset($_POST['update'])){
	$UpdateQuery = "	UPDATE Menu SET id='$_POST[id]', name='$_POST[name]', category='$_POST[category]', price='$_POST[price]', info='$_POST[description]', available='$_POST[available]' WHERE id='$_POST[hidden]'";
	mysql_query($UpdateQuery, $connect);
	};
	
	if(isset($_POST['delete'])){
	$DeleteQuery = "	DELETE FROM Menu WHERE id='$_POST[hidden]'";         
	mysql_query($DeleteQuery, $connect);
	};
	
	if(isset($_POST['add'])){
	$AddQuery = "INSERT INTO Menu (id, name, category, price, info, available) VALUES ('$_POST[uid]','$_POST[uname]', '$_POST[ucat]', '$_POST[upr]', '$_POST[uinfo]', '$_POST[uavail]')";
	mysql_query($AddQuery, $connect);
	};

	
	
	$sql = "SELECT * FROM Menu";
	$data = mysql_query($sql, $connect);
	echo"<center><table style='border: solid 3px black'>
		<th>ID</th>
		<th>Name</th>
		<th>Category</th>
		<th>Price</th>
		<th>Description</th>
		<th>Available?</th>";
	while($res=mysql_fetch_array($data)){
		echo "<form action=adminmenu.php method=post>";
		echo "<tr>";
		echo "<td>" . "<input type=text name=id style='width:50px' value=" . $res['id'] . " </td>";
		echo "<td><input type='text' name='name' value='" . $res['name'] . "'></td>";
		echo "<td><input type='text' name='category' style='width:100px' value='" . $res['category'] . "'></td>";
		echo "<td><input type=text name=price style='width:75px' value='" . $res['price'] . "'></td>";
		echo "<td><textarea name='description' cols='20' rows='2'>" . $res['info'] . "</textarea></td>";
		echo "<td><input type=text name=available style='width:75px' value='" . $res['available'] . "'></td>";
		echo "<td>" . "<input type=hidden name=hidden value=" . $res['id'] . " </td>";
		echo "<td>" . "<input type=submit name=update value='Update Menu Item'" . " </td>";
		echo "<td>" . "<input type=submit name=delete value='Delete Menu Item'" . " </td>";
		echo "</tr>";
		echo "</form>";
	}
	
	echo "<form action=adminmenu.php method=post>";
	echo "<tr>";
	echo "<td><input type=text style='width:50px' name=uid></td>";
	echo "<td><input type=text name=uname></td>";
	echo "<td><select name=ucat>
				<option value='Drink'>Drink</option>
				<option value='Starter'>Starter</option>
				<option value='Salad'>Salad</option>
				<option value='Sandwich'>Sandwich</option>
				<option value='Entree'>Entree</option>
				<option value='Dessert'>Dessert</option>
				</td>";
	echo "<td><input type=text style='width:75px' name=upr></td>";
	echo "<td><textarea name='uinfo' cols='20' rows='2'></textarea></td>";
	echo "<td><select name=uavail>
				<option value='YES'>YES</option>
				<option value='NO'>NO</option>
				</td>";
	echo "<td>" . "<input type=submit name=add value='Add Menu Item'" . " </td>";
	echo "</tr>";
	echo "</form>";
	
	echo'</table></center>';
?>
	  



<?php include('footer.php'); ?>