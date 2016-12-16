<?php include('header.php'); ?>
<h1>CONTACT US</h1>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <center><div id="loginbox">
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    <br>
    <input name="name" type="text" value="" size="30" placeholder="Your Name"/><br>
    <br>
    <input name="email" type="text" value="" size="30" placeholder="Your Email"/><br>
    <br>
    <textarea name="message" rows="7" cols="30" placeholder="Your Message Here"></textarea><br>
    <input type="submit" value="Send email" id="button"/>
    </form>
    </div></center>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("capstonerestaurant@gmail.com", $subject, $message, $from);
		echo "<center><h2>Email sent!</h2></center>";
		echo "<center><a href='index.php'>GO HOME</a></center>";
	    }
    }  
?>

<center><h3>STORE LOCATION</h3></center>
    <div id="map"></div>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 39.169692, lng: -86.533952};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcYIqcLwokUYR6s_tnAgHzbA8GUznajZc&callback=initMap">
    </script>
    
    
<?php include('footer.php'); ?>