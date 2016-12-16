<?php include('header.php'); ?>
<h1>ABOUT US</h1>

<div class="about">
<?php
	session_start();
	include('sql.php');
	$query=mysql_query("SELECT info FROM About")  or die(mysql_error());
	echo"<center><table style='border: solid 3px black;'><th>What is Capstone Restaurant all about?</th>";
	while($res=mysql_fetch_array($query))
	{
  	echo'<tr style="padding: 5px">
  		<td style="border: solid black 2px">'.$res['info'].'</td>
	   </tr>';
	}
	echo'</table></center>';
?>
</div>


<?php include('footer.php'); ?>