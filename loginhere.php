<?php include('header.php'); ?>
<br>
<br>
<center>
<div id="loginbox">
	<center>
	<form action="#" method="post">
	<div><h1>Sign In</h1></div>
		<?php include 'login.php';	?>
		<input type="text" name="username" placeholder="Username"></input><br>	
		<input type="password" name="password" placeholder="Password"></input><br>		
		<input type="submit" value="Login" name="submit" id="button"></input>
	</form>
	</center>
</div>
</center>


<?php include('footer.php'); ?>