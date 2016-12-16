<?php include('header.php'); ?>
<br>
<br>
<h1>EVENTS</h1>
<br>
<center><h3>This page displays the recent and upcoming Everts taking place at Capstone Restaurant! Clear your evening schedules and join us for a one of a kind fine-dining experience!</h3></center>

<?php
	session_start();
	$_SESSION['clicks'] = 1;
	include('sql.php');
	
	
	$left = $_POST['left'];
	$right = $_POST['right'];
	
	if(isset($_POST['left'])){	
		click_button(-1);
	}
	if(isset($_POST['right'])){
		click_button(1);
	}
	
	$clicks = $_SESSION['clicks'];
	//echo "<div id='error'>Clicks: '$val'</div>";
	
	echo"<center><table width='75%' style='border: solid 3px black;'><th>Title</th><th>Date</th><th>Location</th><th>Description</th><th>Status</th>";
	for($i = $clicks * 10 - 9; $i <= $clicks * 10; $i++){
		$query = mysql_query("select * from Events WHERE id = '$i'")  or die(mysql_error());
		$row = mysql_fetch_row($query); 
  	echo'<tr style="padding: 5px">
		<td height="65px" align="center" style="padding:5px; border: solid black 2px">'.$row[1].'</td>
		<td height="65px" align="center" style="padding:5px; border: solid black 2px" width="100">'.$row[2].'</td>
		<td height="65px" align="center" style="padding:5px; border: solid black 2px">'.$row[3].'</td>
		<td height="65px" style="padding:5px; border: solid black 2px">'.$row[4].'</td>
		<td height="65px" align="center" style="padding:5px; border: solid black 2px">'.$row[5].'</td>
	   </tr>';
	
	}
	echo'</table></center>';

	function click_button($num){
		$clicks = $_SESSION['clicks'];
		if($num == 1){
			//echo "<div id='error'>Right Arrow Clicked</div>";
			if($clicks != 10){ $_SESSION['clicks']++; }
		}else{
			//echo "<div id='error'>Left Arrow Clicked</div>";
			if($clicks != 1){ $_SESSION['clicks']--; }
		}
	}
	?>
    
<br>
<br>
<center>
<div id="left arrow">
	<center>
	<form action="events.php" method="post">
		<input type="submit" value="Previous" name="left" id="button"></input>
	</form>
	</center>
</div>
<div id="right arrow">
	<center>
	<form action="events.php" method="post">
		<input type="submit" value="Next" name="right" id="button"></input>
	</form>
	</center>
</div>
</center>

<?php include('footer.php'); ?>