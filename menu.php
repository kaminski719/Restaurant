<?php include('header.php'); ?>
<br>
<br>
<h1>MENU</h1>
<?php
	session_start();
	include('sql.php');
	
	$query=mysql_query("select name, category, price, info, available from Menu")  or die(mysql_error());
	echo"<center><table style='border: solid 3px black;'><th>Name</th><th>Category</th><th>Price</th><th>Description</th><th>Available?</th>";
	while($res=mysql_fetch_array($query))
	{
  	echo'<tr style="padding: 5px">
  		<td style="border-bottom: solid black 2px">'.$res['name'].'</td>
		<td style="border-bottom: solid black 2px">'.$res['category'].'</td>
		<td style="border-bottom: solid black 2px">'.$res['price'].'</td>
		<td style="border-bottom: solid black 2px">'.$res['info'].'</td>
		<td align="center" style="border-bottom: solid black 2px">'.$res['available'].'</td>
	   </tr>';
	}
	echo'</table></center>';
?>
	  



<?php include('footer.php'); ?>