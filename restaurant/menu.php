<?php include('header.php'); ?>
<br>
<br>
<h1>MENU</h1>
<center><h3>Drinks</h3></center>
<?php

	session_start();
	include('sql.php');
	
	$query=mysql_query("select name, category, price, info, available from Menu WHERE category='Drink'")  or die(mysql_error());
	echo"<center><table width='75%' style='border: solid 3px black;'><th>Name</th><th>Category</th><th>Price</th><th>Description</th><th>Available?</th>";
	while($res=mysql_fetch_array($query))
	{
  	echo'<tr style="padding: 5px">
  		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['name'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['category'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['price'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['info'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['available'].'</td>
	   </tr>';
	}
	echo'</table></center>';
?>
<br>
<center><h3>Starters</h3></center>

<?php

	session_start();
	include('sql.php');
	
	$query=mysql_query("select name, category, price, info, available from Menu WHERE category='Starter'")  or die(mysql_error());
	echo"<center><table width='75%' style='border: solid 3px black;'><th>Name</th><th>Category</th><th>Price</th><th>Description</th><th>Available?</th>";
	while($res=mysql_fetch_array($query))
	{
  	echo'<tr style="padding: 5px">
  		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['name'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['category'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['price'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['info'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['available'].'</td>
	   </tr>';
	}
	echo'</table></center>';
?>
<br>
<center><h3>Salads</h3></center>
<?php

	session_start();
	include('sql.php');
	
	$query=mysql_query("select name, category, price, info, available from Menu WHERE category='Salad'")  or die(mysql_error());
	echo"<center><table width='75%' style='border: solid 3px black;'><th>Name</th><th>Category</th><th>Price</th><th>Description</th><th>Available?</th>";
	while($res=mysql_fetch_array($query))
	{
  	echo'<tr style="padding: 5px">
  		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['name'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['category'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['price'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['info'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['available'].'</td>
	   </tr>';
	}
	echo'</table></center>';
?>
<br>
<center><h3>Sandwiches</h3></center>
<?php

	session_start();
	include('sql.php');
	
	$query=mysql_query("select name, category, price, info, available from Menu WHERE category='Sandwich'")  or die(mysql_error());
	echo"<center><table width='75%' style='border: solid 3px black;'><th>Name</th><th>Category</th><th>Price</th><th>Description</th><th>Available?</th>";
	while($res=mysql_fetch_array($query))
	{
  	echo'<tr style="padding: 5px">
  		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['name'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['category'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['price'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['info'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['available'].'</td>
	   </tr>';
	}
	echo'</table></center>';
?>

<br>
<center><h3>Entrees</h3></center>
<?php

	session_start();
	include('sql.php');
	
	$query=mysql_query("select name, category, price, info, available from Menu WHERE category='Entree'")  or die(mysql_error());
	echo"<center><table width='75%' style='border: solid 3px black;'><th>Name</th><th>Category</th><th>Price</th><th>Description</th><th>Available?</th>";
	while($res=mysql_fetch_array($query))
	{
  	echo'<tr style="padding: 5px">
  		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['name'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['category'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['price'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['info'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['available'].'</td>
	   </tr>';
	}
	echo'</table></center>';
?>
<br>
<center><h3>Desserts</h3></center>
<?php

	session_start();
	include('sql.php');
	
	$query=mysql_query("select name, category, price, info, available from Menu WHERE category='Dessert'")  or die(mysql_error());
	echo"<center><table width='75%' style='border: solid 3px black;'><th>Name</th><th>Category</th><th>Price</th><th>Description</th><th>Available?</th>";
	while($res=mysql_fetch_array($query))
	{
  	echo'<tr style="padding: 5px">
  		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['name'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['category'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['price'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['info'].'</td>
		<td height="50px" align="center" style="padding:5px; border: solid black 2px">'.$res['available'].'</td>
	   </tr>';
	}
	echo'</table></center>';
?>

<?php include('footer.php'); ?>




