<?php
if(isset($_POST['submit']))
{ 
	include("sql.php");
  $filename=$_FILES['file']['name'];
   $filetype=$_FILES['file']['type'];
if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif')
{
move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filename);
$filepath="upload/".$filename;
$sql="insert into images values('$filepath')";
mysql_query($sql);
}		
header("adminabout.php");
}
?>