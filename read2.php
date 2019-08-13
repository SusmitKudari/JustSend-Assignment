<?php
include('read_details.php');
 $code =$_GET['code'];
?>



<!DOCTYPE html>
<html>
<head>
	<title>read the message</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
</head>
<body>
   <?php
  	
   	
     $query = "SELECT * FROM messages WHERE code='$code'";
	 $data = mysqli_query($db,$query);
	 $row=mysqli_fetch_assoc($data);
	   //echo $row["code"].'  '.$row["subject"]
	 ?>
<div class="final_container">
	<div class="header5">
		<h2>JUstSend</h2>
	</div>

	<div class="sample">
		<p>Name : <?php echo $row["name"]?></p>
	</div>

	<div class="sample">
		<p>Subject : <?php echo $row["subject"]?></p>
	</div>

	<div class="sample">
		<p>Message :<?php echo $row["msg"]?></p>
</div>
	

</body>
</html>