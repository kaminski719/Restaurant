<?php include('header.php'); ?>
<div id="frm">
   	<form action="login.php" method="POST">
    Login Here!
        	<p>
            	<label>Username:</label>
                <input type="text" id="user" name="user" />
            	<label>Password:</label>
                <input type="password" id="pass" name="pass" />
           </p>
           <p>
                <input type="submit" id="btn" name="Login" />
           </p>
       </form>
   </div>
           	
<?php include('footer.php'); ?>
